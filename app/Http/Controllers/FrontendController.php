<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogmaster;
use App\Models\Meta;
use App\Support\ProjectCatalog;
use App\Support\ServiceCatalog;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function home()
    {
        $metaog = $this->getMetaForPage(1);

        return view('pages.frontend.index', compact('metaog'));
    }

    public function about()
    {
        $metaog = $this->getMetaForPage(2);
        $teamMembers = $this->getTeamMembers();
        $featuredTeamMember = $teamMembers->first();

        return view('pages.frontend.about', compact('metaog', 'teamMembers', 'featuredTeamMember'));
    }

    public function service()
    {
        $metaog = $this->getMetaForPage(3);

        return view('pages.frontend.service', compact('metaog'));
    }


    public function projects(ProjectCatalog $projectCatalog)
    {
        $metaog = null;
        $projects = $projectCatalog->all();

        return view('pages.frontend.projects', compact('metaog', 'projects'));
    }

    public function projectShow(ProjectCatalog $projectCatalog, string $project)
    {
        $metaog = null;
        $project = $projectCatalog->findBySlug($project);

        abort_if($project === null, 404);

        return view('pages.frontend.partials.project-detail', compact('metaog', 'project'));
    }

    public function contact()
    {
        $metaog = $this->getMetaForPage(6);

        return view('pages.frontend.contact', compact('metaog'));
    }

    public function servicedetails(ServiceCatalog $serviceCatalog, string $service)
    {
        $metaog = $this->getMetaForPage(7);
        $serviceDetail = $serviceCatalog->findBySlug($service);

        abort_if($serviceDetail === null, 404);

        return view('pages.frontend.service-details', compact('metaog', 'serviceDetail'));
    }

    public function arulmanihouse()
    {
        return redirect()->route('projects.show', ['project' => 'arulmani-residence']);
    }

    public function blogs()
    {
        $metaog = $this->getMetaForPage(9);
        $blogs = Blog::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();

        $categories = Blogmaster::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();
        foreach ($categories as $key => $categor) {
            $count_Blog = Blog::where('soft_delete', '=', Null)->where('blog_master_id', '=', $categor->id)->get();
            $categor->totalBlog = count(collect($count_Blog));
        }
        return view('pages.frontend.blogs', compact('metaog', 'blogs', 'categories'));
    }

    public function blogdetails($blog_id)
    {
        $metaog = $this->getMetaForPage(10);
        $blogs = Blog::where('soft_delete', '=', Null)->where('id', '=', $blog_id)->first();
        $randomBlogs = Blog::where('id', '!=', $blog_id)->inRandomOrder()->limit(3)->get();
        $categories = Blogmaster::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();
        foreach ($categories as $key => $categor) {
            $count_Blog = Blog::where('soft_delete', '=', Null)->where('blog_master_id', '=', $categor->id)->get();
            $categor->totalBlog = count(collect($count_Blog));
        }
        return view('pages.frontend.blog-details', compact('metaog', 'blogs', 'categories', 'randomBlogs'));
    }

    public function thethinnaihouse()
    {
        return redirect()->route('projects.show', ['project' => 'the-thinnai-house']);
    }

    public function ravichandranhouse()
    {
        return redirect()->route('projects.show', ['project' => 'ravichandran-residence']);
    }

    public function baskershanthiresidence()
    {
        return redirect()->route('projects.show', ['project' => 'basker-and-shanthi-residence']);
    }

    public function hindustanschoolofarchitecture()
    {
        return redirect()->route('projects.show', ['project' => 'hindustan-school-of-architecture']);
    }

    public function yercaudhouse()
    {
        return redirect()->route('projects.show', ['project' => 'yercaud-guest-house']);
    }

    private function getTeamMembers()
    {
        $teamDirectory = public_path('assets/frontend/img/teams');

        if (! File::isDirectory($teamDirectory)) {
            return collect();
        }

        return collect(File::files($teamDirectory))
            ->filter(fn ($file) => in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'webp'], true))
            ->sortBy(fn ($file) => sprintf('%05d-%s', $this->extractTeamOrder($file->getFilename()), $file->getFilename()), SORT_NATURAL)
            ->values()
            ->map(function ($file) {
                [$name, $position] = $this->extractTeamDetails($file->getFilename());
                $name = $this->formatTeamName($name);
                $displayName = trim($name . ($position !== '' ? ' - ' . $position : ''));

                return [
                    'name' => $name,
                    'position' => $position,
                    'display_name' => $displayName,
                    'image' => asset($this->encodeAssetPath('assets/frontend/img/teams/' . $file->getFilename())),
                ];
            });
    }

    private function extractTeamOrder(string $filename): int
    {
        if (preg_match('/^(\d+)/', $filename, $matches) === 1) {
            return (int) $matches[1];
        }

        return PHP_INT_MAX;
    }

    private function extractTeamDetails(string $filename): array
    {
        $label = pathinfo($filename, PATHINFO_FILENAME);
        $label = preg_replace('/^\d+[._-]*/', '', $label);
        $label = preg_replace('/\s+/', ' ', trim($label));
        $parts = preg_split('/\s*-\s*/', $label, 2);

        return [
            trim($parts[0] ?? ''),
            trim($parts[1] ?? ''),
        ];
    }

    private function formatTeamName(string $name): string
    {
        $name = preg_replace('/\.(?=\S)/u', '. ', trim($name));
        $name = preg_replace('/\s+/', ' ', $name);

        return Str::title(Str::lower($name));
    }

    private function encodeAssetPath(string $path): string
    {
        return implode('/', array_map('rawurlencode', explode('/', $path)));
    }

    private function getMetaForPage(int $pageId): ?Meta
    {
        try {
            return Meta::where('page_id', '=', $pageId)->first();
        } catch (QueryException $exception) {
            Log::warning('Meta lookup failed for frontend page; using default fallback metadata.', [
                'page_id' => $pageId,
                'error' => $exception->getMessage(),
            ]);

            return null;
        }
    }
}
