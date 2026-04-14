<?php

namespace App\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Throwable;
use ZipArchive;

class ProjectCatalog
{
    private const IMAGE_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp'];

    private const DOCUMENT_EXTENSIONS = ['doc', 'docx', 'odt', 'txt'];

    private const CONTENT_FILE = 'projects-content.json';

    public function all(): Collection
    {
        $baseDirectory = public_path('assets/frontend/img/projects');

        if (! File::isDirectory($baseDirectory)) {
            return collect();
        }

        return collect(File::directories($baseDirectory))
            ->sortBy(
                fn (string $directory) => sprintf(
                    '%05d-%s',
                    $this->extractOrder(basename($directory)),
                    basename($directory)
                ),
                SORT_NATURAL
            )
            ->map(function (string $directory) {
                try {
                    return $this->buildProject($directory);
                } catch (Throwable $exception) {
                    Log::warning('Skipping project directory because its content could not be parsed.', [
                        'directory' => $directory,
                        'error' => $exception->getMessage(),
                    ]);

                    return null;
                }
            })
            ->filter()
            ->values();
    }

    public function findBySlug(string $slug): ?array
    {
        return $this->all()->firstWhere('slug', $slug);
    }

    private function buildProject(string $projectDirectory): ?array
    {
        $folderTitle = $this->humanizeProjectFolderName(basename($projectDirectory));
        $slug = Str::slug($this->folderNameWithoutPrefix(basename($projectDirectory)));

        if ($slug === '') {
            $slug = Str::slug($folderTitle);
        }

        $fallbackContent = $this->content()[$slug] ?? [];
        $fallbackTitle = $this->normalizeContentTitle($fallbackContent['title'] ?? null);
        $fallbackFacts = $this->normalizeFallbackFacts($fallbackContent['facts'] ?? []);
        $fallbackConceptSections = $this->normalizeFallbackConceptSections($fallbackContent['concept_sections'] ?? []);

        $photoDirectory = $this->findChildDirectory($projectDirectory, 'photo');
        $documentDirectory = $this->findChildDirectory($projectDirectory, 'document');

        $thumbnailRootDirectory = $photoDirectory ? $this->findChildDirectory($photoDirectory, 'thumbnail') : null;
        $thumbnailDirectory = $thumbnailRootDirectory ? $this->findChildDirectory($thumbnailRootDirectory, 'thumbnail') : null;
        $insideImageDirectory = $thumbnailRootDirectory ? $this->findChildDirectory($thumbnailRootDirectory, 'inside') : null;
        $galleryDirectory = $photoDirectory ? $this->findChildDirectory($photoDirectory, 'gallery') : null;
        $designImageDirectory = $photoDirectory ? $this->findChildDirectory($photoDirectory, 'design concept') : null;

        $conceptDocumentDirectory = $documentDirectory ? $this->findChildDirectory($documentDirectory, 'design concept') : null;
        $projectDetailsDirectory = $documentDirectory ? $this->findChildDirectory($documentDirectory, 'project details') : null;

        $thumbnailImage = $this->firstImage($thumbnailDirectory);
        $coverImage = $this->firstImage($insideImageDirectory) ?? $thumbnailImage ?? $this->firstImage($galleryDirectory);
        $galleryImages = $this->imageFiles($galleryDirectory);
        $designImages = $this->imageFiles($designImageDirectory);

        $detailsText = $this->readFirstDocument($projectDetailsDirectory);
        $details = $this->parseProjectDetails($detailsText);
        $facts = $this->mergeFacts($details['facts'], $fallbackFacts);

        $title = $folderTitle !== ''
            ? $folderTitle
            : ($details['title'] ?? $fallbackTitle);

        if ($slug === '' || ($thumbnailImage === null && $coverImage === null && $galleryImages->isEmpty())) {
            return null;
        }

        $conceptText = $this->readFirstDocument($conceptDocumentDirectory);
        $conceptSections = $this->parseConceptSections($conceptText);

        if ($conceptSections === []) {
            $conceptSections = $fallbackConceptSections;
        }

        return [
            'slug' => $slug,
            'title' => $title,
            'location' => $this->extractFactValue($facts, 'location'),
            'thumbnail_image' => $this->toAssetPath($thumbnailImage ?? $coverImage),
            'cover_image' => $this->toAssetPath($coverImage ?? $thumbnailImage),
            'gallery_images' => $galleryImages->map(fn (string $path) => $this->toAssetPath($path))->values()->all(),
            'design_images' => $designImages->map(fn (string $path) => $this->toAssetPath($path))->values()->all(),
            'facts' => $facts,
            'concept_sections' => $conceptSections,
        ];
    }

    private function content(): array
    {
        $path = public_path('assets/frontend/img/projects/' . self::CONTENT_FILE);

        if (! File::exists($path)) {
            return [];
        }

        try {
            $decoded = json_decode(File::get($path), true, 512, JSON_THROW_ON_ERROR);
        } catch (Throwable $exception) {
            Log::warning('Project content file could not be decoded.', [
                'path' => $path,
                'error' => $exception->getMessage(),
            ]);

            return [];
        }

        return is_array($decoded) ? $decoded : [];
    }

    private function extractOrder(string $directoryName): int
    {
        if (preg_match('/^(\d+)/', $directoryName, $matches) === 1) {
            return (int) $matches[1];
        }

        return PHP_INT_MAX;
    }

    private function folderNameWithoutPrefix(string $directoryName): string
    {
        $directoryName = preg_replace('/^\d+\s*[.\-_)]*\s*/', '', $directoryName);

        return trim((string) $directoryName);
    }

    private function humanizeProjectFolderName(string $directoryName): string
    {
        $name = $this->folderNameWithoutPrefix($directoryName);
        $name = preg_replace('/\s+/', ' ', (string) $name);

        return Str::title(Str::lower(trim((string) $name)));
    }

    private function findChildDirectory(?string $parentDirectory, string $needle): ?string
    {
        if ($parentDirectory === null || ! File::isDirectory($parentDirectory)) {
            return null;
        }

        return collect(File::directories($parentDirectory))
            ->first(function (string $directory) use ($needle) {
                return Str::contains($this->normalizeName(basename($directory)), $this->normalizeName($needle));
            });
    }

    private function firstImage(?string $directory): ?string
    {
        return $this->imageFiles($directory)->first();
    }

    private function imageFiles(?string $directory): Collection
    {
        if ($directory === null || ! File::isDirectory($directory)) {
            return collect();
        }

        return collect(File::allFiles($directory))
            ->filter(fn ($file) => in_array(strtolower($file->getExtension()), self::IMAGE_EXTENSIONS, true))
            ->sortBy(fn ($file) => $file->getRelativePathname(), SORT_NATURAL)
            ->map(fn ($file) => $file->getPathname())
            ->values();
    }

    private function readFirstDocument(?string $directory): ?string
    {
        if ($directory === null || ! File::isDirectory($directory)) {
            return null;
        }

        $documentPath = collect(File::allFiles($directory))
            ->filter(fn ($file) => in_array(strtolower($file->getExtension()), self::DOCUMENT_EXTENSIONS, true))
            ->sortBy(fn ($file) => $file->getRelativePathname(), SORT_NATURAL)
            ->map(fn ($file) => $file->getPathname())
            ->first();

        if ($documentPath === null) {
            return null;
        }

        return $this->readDocument($documentPath);
    }

    private function readDocument(string $path): ?string
    {
        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        try {
            return match ($extension) {
                'docx' => $this->readZipTextDocument($path, 'word/document.xml', ['</w:p>' => "\n\n", '<w:tab/>' => "\t", '<w:br/>' => "\n"]),
                'odt' => $this->readZipTextDocument($path, 'content.xml', ['</text:h>' => "\n\n", '</text:p>' => "\n\n", '<text:tab/>' => "\t", '<text:line-break/>' => "\n"]),
                'txt' => File::get($path),
                'doc' => $this->readLegacyDoc($path),
                default => null,
            };
        } catch (Throwable $exception) {
            Log::warning('Project document could not be read; continuing without document content.', [
                'path' => $path,
                'error' => $exception->getMessage(),
            ]);

            return null;
        }
    }

    private function readZipTextDocument(string $path, string $entryName, array $replacements): ?string
    {
        if (! class_exists(ZipArchive::class)) {
            Log::warning('ZIP extension is unavailable; skipping ZIP-based project document parsing.', [
                'path' => $path,
            ]);

            return null;
        }

        $zip = new ZipArchive();

        if ($zip->open($path) !== true) {
            return null;
        }

        $xml = $zip->getFromName($entryName);
        $zip->close();

        if ($xml === false || $xml === '') {
            return null;
        }

        $xml = str_replace(array_keys($replacements), array_values($replacements), $xml);
        $text = html_entity_decode(strip_tags($xml), ENT_QUOTES | ENT_HTML5, 'UTF-8');

        return $this->normalizeDocumentText($text);
    }

    private function readLegacyDoc(string $path): ?string
    {
        $textUtilPath = trim((string) shell_exec('command -v textutil 2>/dev/null'));

        if ($textUtilPath === '') {
            return null;
        }

        $command = $textUtilPath . ' -convert txt -stdout ' . escapeshellarg($path) . ' 2>/dev/null';
        $output = shell_exec($command);

        if (! is_string($output) || trim($output) === '') {
            return null;
        }

        return $this->normalizeDocumentText($output);
    }

    private function normalizeDocumentText(string $text): string
    {
        $text = str_replace(["\r\n", "\r"], "\n", $text);
        $text = str_replace("\xC2\xA0", ' ', $text);
        $text = preg_replace("/[ \t]+\n/u", "\n", $text);
        $text = preg_replace("/\n{3,}/u", "\n\n", $text);

        return trim((string) $text);
    }

    private function parseProjectDetails(?string $text): array
    {
        $lines = $this->documentLines($text);
        $title = null;
        $facts = [];

        foreach ($lines as $index => $line) {
            if ($index === 0) {
                $title = $this->cleanTitle($line);
                continue;
            }

            if (preg_match('/^\s*([^:]+):\s*(.*?)\s*$/u', $line, $matches) !== 1) {
                continue;
            }

            $label = $this->normalizeFactLabel($matches[1]);
            $value = $this->normalizeFactValue($matches[2]);

            if ($label === 'Name of the project' && $value !== null) {
                $title = $this->cleanTitle($value);
                continue;
            }

            if ($value === null) {
                continue;
            }

            $facts[] = [
                'label' => $label,
                'value' => $value,
            ];
        }

        return [
            'title' => $title,
            'facts' => $facts,
        ];
    }

    private function parseConceptSections(?string $text): array
    {
        $lines = $this->documentLines($text);

        if ($lines === []) {
            return [];
        }

        if ($this->looksLikeDocumentTitle($lines[0])) {
            array_shift($lines);
        }

        if ($lines === []) {
            return [];
        }

        $sections = [];
        $currentSection = [
            'title' => 'Design Concept',
            'paragraphs' => [],
        ];
        $hasExplicitHeadings = false;

        foreach ($lines as $line) {
            if ($this->looksLikeSectionHeading($line)) {
                if ($currentSection['paragraphs'] !== []) {
                    $sections[] = $currentSection;
                }

                $currentSection = [
                    'title' => $this->cleanTitle($line),
                    'paragraphs' => [],
                ];
                $hasExplicitHeadings = true;

                continue;
            }

            $currentSection['paragraphs'][] = $this->normalizeParagraph($line);
        }

        if ($currentSection['paragraphs'] !== []) {
            $sections[] = $currentSection;
        }

        if (! $hasExplicitHeadings && isset($sections[0])) {
            $sections[0]['title'] = 'Design Concept';
        }

        return array_values(array_filter($sections, fn (array $section) => $section['paragraphs'] !== []));
    }

    private function looksLikeDocumentTitle(string $line): bool
    {
        if ($line === '' || preg_match('/[:.!?]$/u', $line) === 1) {
            return false;
        }

        $wordCount = str_word_count(str_replace('&', ' and ', $line));

        return $wordCount > 0 && $wordCount <= 8 && Str::length($line) <= 80;
    }

    private function looksLikeSectionHeading(string $line): bool
    {
        if ($line === '' || Str::contains($line, ':') || preg_match('/[.!?]$/u', $line) === 1) {
            return false;
        }

        $wordCount = str_word_count(str_replace('&', ' and ', $line));

        if ($wordCount === 0 || $wordCount > 6 || Str::length($line) > 70) {
            return false;
        }

        return $line === Str::upper($line)
            || preg_match('/^[A-Z][A-Za-z.&-]*(?:\s+[A-Z&][A-Za-z.&-]*)*$/', $line) === 1;
    }

    private function documentLines(?string $text): array
    {
        if ($text === null || trim($text) === '') {
            return [];
        }

        return array_values(array_filter(array_map(function (string $line) {
            $line = preg_replace('/\s+/u', ' ', trim($line));

            return trim((string) $line);
        }, preg_split('/\R/u', $text) ?: [])));
    }

    private function normalizeFactLabel(string $label): string
    {
        $normalized = $this->normalizeName($label);

        return match ($normalized) {
            'name of the project' => 'Name of the project',
            'location' => 'Location',
            'client' => 'Client',
            'year of completion' => 'Year of completion',
            'built up area' => 'Built-up area',
            'site area' => 'Site area',
            'authority of approval' => 'Authority of approval',
            'design team' => 'Design team',
            'contractor' => 'Contractor',
            'site engineer' => 'Site engineer',
            'structural consultant' => 'Structural consultant',
            'electrical consultant' => 'Electrical consultant',
            'plumbing consultant' => 'Plumbing consultant',
            default => Str::title(Str::lower(trim($label))),
        };
    }

    private function normalizeFactValue(string $value): ?string
    {
        $value = preg_replace('/\s+/u', ' ', trim($value));
        $value = trim((string) $value, " \t\n\r\0\x0B.");

        if ($value === '' || $value === '-') {
            return null;
        }

        return $value;
    }

    private function normalizeParagraph(string $paragraph): string
    {
        return trim((string) preg_replace('/\s+/u', ' ', $paragraph));
    }

    private function normalizeContentTitle(mixed $title): ?string
    {
        if (! is_string($title) && ! is_numeric($title)) {
            return null;
        }

        $title = $this->cleanTitle((string) $title);

        return $title !== '' ? $title : null;
    }

    private function normalizeFallbackFacts(mixed $facts): array
    {
        if (! is_array($facts)) {
            return [];
        }

        return collect($facts)
            ->filter(fn ($fact) => is_array($fact))
            ->map(function (array $fact) {
                $label = $fact['label'] ?? null;
                $value = $fact['value'] ?? null;

                if (! is_string($label) && ! is_numeric($label)) {
                    return null;
                }

                if (! is_string($value) && ! is_numeric($value)) {
                    return null;
                }

                $label = $this->normalizeFactLabel((string) $label);
                $value = $this->normalizeFactValue((string) $value);

                if ($value === null) {
                    return null;
                }

                return [
                    'label' => $label,
                    'value' => $value,
                ];
            })
            ->filter()
            ->values()
            ->all();
    }

    private function normalizeFallbackConceptSections(mixed $sections): array
    {
        if (! is_array($sections)) {
            return [];
        }

        return collect($sections)
            ->filter(fn ($section) => is_array($section))
            ->map(function (array $section) {
                $title = $section['title'] ?? null;
                $paragraphs = $section['paragraphs'] ?? [];

                if (! is_string($title) && ! is_numeric($title)) {
                    $title = 'Design Concept';
                }

                if (! is_array($paragraphs)) {
                    $paragraphs = [];
                }

                $paragraphs = collect($paragraphs)
                    ->filter(fn ($paragraph) => is_string($paragraph) || is_numeric($paragraph))
                    ->map(fn ($paragraph) => $this->normalizeParagraph((string) $paragraph))
                    ->filter()
                    ->values()
                    ->all();

                if ($paragraphs === []) {
                    return null;
                }

                return [
                    'title' => $this->cleanTitle((string) $title),
                    'paragraphs' => $paragraphs,
                ];
            })
            ->filter()
            ->values()
            ->all();
    }

    private function mergeFacts(array $facts, array $fallbackFacts): array
    {
        if ($facts === []) {
            return $fallbackFacts;
        }

        if ($fallbackFacts === []) {
            return $facts;
        }

        $existingLabels = collect($facts)
            ->pluck('label')
            ->filter()
            ->values()
            ->all();

        return collect($facts)
            ->merge(collect($fallbackFacts)->reject(function (array $fact) use ($existingLabels) {
                return in_array($fact['label'], $existingLabels, true);
            }))
            ->values()
            ->all();
    }

    private function cleanTitle(string $title): string
    {
        $title = preg_replace('/\s+/u', ' ', trim($title));

        return trim((string) $title);
    }

    private function extractFactValue(array $facts, string $label): ?string
    {
        $target = $this->normalizeFactLabel($label);

        foreach ($facts as $fact) {
            if (($fact['label'] ?? null) === $target) {
                return $fact['value'] ?? null;
            }
        }

        return null;
    }

    private function normalizeName(string $value): string
    {
        $value = Str::of($value)
            ->replaceMatches('/[._-]+/u', ' ')
            ->replaceMatches('/\s+/u', ' ')
            ->trim()
            ->lower()
            ->value();

        return $value;
    }

    private function toAssetPath(?string $absolutePath): ?string
    {
        if ($absolutePath === null) {
            return null;
        }

        $publicPath = rtrim(str_replace('\\', '/', public_path()), '/');
        $absolutePath = str_replace('\\', '/', $absolutePath);

        if (! Str::startsWith($absolutePath, $publicPath . '/')) {
            return null;
        }

        return ltrim(Str::after($absolutePath, $publicPath), '/');
    }
}
