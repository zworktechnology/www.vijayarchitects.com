<?php

namespace App\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Throwable;

class ServiceCatalog
{
    private const IMAGE_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp'];

    private const CONTENT_FILE = 'services-content.json';

    public function all(): Collection
    {
        return collect($this->content())
            ->map(function (array $service, string $slug) {
                return $this->buildService($slug, $service);
            })
            ->filter()
            ->values();
    }

    public function findBySlug(string $slug): ?array
    {
        $service = $this->content()[$slug] ?? null;

        if (! is_array($service)) {
            return null;
        }

        return $this->buildService($slug, $service);
    }

    private function buildService(string $slug, array $service): ?array
    {
        $folderName = $service['folder'] ?? null;

        if (! is_string($folderName) || $folderName === '') {
            return null;
        }

        $serviceDirectory = public_path('assets/frontend/img/services/' . $folderName);

        if (! File::isDirectory($serviceDirectory)) {
            Log::warning('Service directory not found for service detail page.', [
                'slug' => $slug,
                'folder' => $folderName,
            ]);

            return null;
        }

        return [
            'slug' => $slug,
            'title' => $service['title'] ?? Str::title(str_replace('-', ' ', $slug)),
            'folder' => $folderName,
            'main_icon' => $this->firstMatchingFile($serviceDirectory, '/^main icon\./i'),
            'paragraphs' => $this->stringList($service['paragraphs'] ?? []),
            'subheading' => $this->normalizeText($service['subheading'] ?? null),
            'quotes' => $this->normalizeQuotes($service['quotes'] ?? []),
            'sections' => $this->normalizeSections($service['sections'] ?? []),
            'projects' => $this->serviceProjects($serviceDirectory),
        ];
    }

    private function content(): array
    {
        $path = public_path('assets/frontend/img/services/' . self::CONTENT_FILE);

        if (! File::exists($path)) {
            return [];
        }

        try {
            $decoded = json_decode(File::get($path), true, 512, JSON_THROW_ON_ERROR);
        } catch (Throwable $exception) {
            Log::warning('Service content file could not be decoded.', [
                'path' => $path,
                'error' => $exception->getMessage(),
            ]);

            return [];
        }

        return is_array($decoded) ? $decoded : [];
    }

    private function serviceProjects(string $serviceDirectory): array
    {
        $assetsDirectory = $this->firstDirectoryByName($serviceDirectory, 'assets');

        if ($assetsDirectory === null) {
            return [];
        }

        return collect(File::directories($assetsDirectory))
            ->sortBy(fn (string $directory) => basename($directory), SORT_NATURAL)
            ->map(function (string $directory) {
                $images = $this->imageFiles($directory)
                    ->map(fn (string $path) => $this->toAssetPath($path))
                    ->filter()
                    ->values()
                    ->all();

                if ($images === []) {
                    return null;
                }

                return [
                    'title' => $this->humanizeFolderName(basename($directory)),
                    'images' => $images,
                ];
            })
            ->filter()
            ->values()
            ->all();
    }

    private function normalizeSections(array $sections): array
    {
        return collect($sections)
            ->filter(fn ($section) => is_array($section))
            ->map(function (array $section) {
                return [
                    'title' => $this->normalizeText($section['title'] ?? null) ?? 'Section',
                    'paragraphs' => $this->stringList($section['paragraphs'] ?? []),
                    'quotes' => $this->normalizeQuotes($section['quotes'] ?? []),
                ];
            })
            ->filter(fn (array $section) => $section['paragraphs'] !== [] || $section['quotes'] !== [])
            ->values()
            ->all();
    }

    private function normalizeQuotes(array $quotes): array
    {
        return collect($quotes)
            ->filter(fn ($quote) => is_array($quote))
            ->map(function (array $quote) {
                return [
                    'author' => $this->normalizeText($quote['author'] ?? null),
                    'text' => $this->normalizeText($quote['text'] ?? null) ?? '',
                ];
            })
            ->filter(fn (array $quote) => $quote['text'] !== '')
            ->values()
            ->all();
    }

    private function stringList(array $items): array
    {
        return collect($items)
            ->filter(fn ($item) => is_string($item) || is_numeric($item))
            ->map(fn ($item) => $this->normalizeText((string) $item))
            ->filter()
            ->values()
            ->all();
    }

    private function normalizeText(?string $text): ?string
    {
        if ($text === null) {
            return null;
        }

        $text = preg_replace('/\s+/u', ' ', trim($text));

        return $text !== '' ? $text : null;
    }

    private function imageFiles(string $directory): Collection
    {
        if (! File::isDirectory($directory)) {
            return collect();
        }

        return collect(File::allFiles($directory))
            ->filter(function ($file) {
                return in_array(strtolower($file->getExtension()), self::IMAGE_EXTENSIONS, true);
            })
            ->sortBy(fn ($file) => $file->getRelativePathname(), SORT_NATURAL)
            ->map(fn ($file) => $file->getPathname())
            ->values();
    }

    private function firstDirectoryByName(string $parentDirectory, string $needle): ?string
    {
        if (! File::isDirectory($parentDirectory)) {
            return null;
        }

        return collect(File::directories($parentDirectory))
            ->first(function (string $directory) use ($needle) {
                return $this->normalizeName(basename($directory)) === $this->normalizeName($needle);
            });
    }

    private function firstMatchingFile(string $directory, string $pattern): ?string
    {
        if (! File::isDirectory($directory)) {
            return null;
        }

        $path = collect(File::files($directory))
            ->first(fn ($file) => preg_match($pattern, $file->getFilename()) === 1);

        return $path ? $this->toAssetPath($path->getPathname()) : null;
    }

    private function humanizeFolderName(string $name): string
    {
        $name = preg_replace('/\s+/', ' ', trim($name));

        return trim((string) $name);
    }

    private function normalizeName(string $value): string
    {
        return Str::of($value)
            ->replaceMatches('/[._-]+/u', ' ')
            ->replaceMatches('/\s+/u', ' ')
            ->trim()
            ->lower()
            ->value();
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
