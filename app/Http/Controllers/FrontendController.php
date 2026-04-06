<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogmaster;
use App\Models\Meta;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function home()
    {
        $metaog = Meta::where('page_id', '=', 1)->first();

        return view('pages.frontend.index', compact('metaog'));
    }

    public function about()
    {
        $metaog = Meta::where('page_id', '=', 2)->first();
        $teamMembers = $this->getTeamMembers();
        $featuredTeamMember = $teamMembers->first();

        return view('pages.frontend.about', compact('metaog', 'teamMembers', 'featuredTeamMember'));
    }

    public function service()
    {
        $metaog = Meta::where('page_id', '=', 3)->first();

        return view('pages.frontend.service', compact('metaog'));
    }


    public function projects()
    {
        $metaog = Meta::where('page_id', '=', 4)->first();

        return view('pages.frontend.projects', compact('metaog'));
    }

    public function amcplans()
    {
        $metaog = Meta::where('page_id', '=', 5)->first();

        return view('pages.frontend.amc', compact('metaog'));
    }

    // public function amc()
    // {
    //     $metaog = Meta::where('page_id', '=', 8)->first();

    //     return view('pages.frontend.amc', compact('metaog'));
    // }


    public function contact()
    {
        $metaog = Meta::where('page_id', '=', 6)->first();

        return view('pages.frontend.contact', compact('metaog'));
    }

    public function servicedetails()
    {
        $metaog = Meta::where('page_id', '=', 7)->first();

        return view('pages.frontend.service-details', compact('metaog'));
    }

    public function arulmanihouse()
    {
        $metaog = Meta::where('page_id', '=', 8)->first();

        return view('pages.frontend.arulmanihouse', compact('metaog'));
    }

    public function blogs()
    {
        $metaog = Meta::where('page_id', '=', 9)->first();
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
        $metaog = Meta::where('page_id', '=', 10)->first();
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
        $metaog = Meta::where('page_id', '=', 11)->first();

        return view('pages.frontend.thethinnaihouse', compact('metaog'));
    }

    public function ravichandranhouse()
    {
        $metaog = Meta::where('page_id', '=', 12)->first();

        return view('pages.frontend.ravichandranhouse', compact('metaog'));
    }

    public function baskershanthiresidence()
    {
        $metaog = Meta::where('page_id', '=', 13)->first();

        return view('pages.frontend.baskershanthiresidence', compact('metaog'));
    }

    public function hindustanschoolofarchitecture()
    {
        $metaog = Meta::where('page_id', '=', 14)->first();

        return view('pages.frontend.hindustanschoolofarchitecture', compact('metaog'));
    }

    public function yercaudhouse()
    {
        $metaog = Meta::where('page_id', '=', 15)->first();

        return view('pages.frontend.yercaudhouse', compact('metaog'));
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
}
