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

    public function servicedetails(string $service)
    {
        $metaog = Meta::where('page_id', '=', 7)->first();
        $services = $this->getServiceDetails();
        $serviceDetail = $services[$service] ?? null;

        abort_if($serviceDetail === null, 404);

        return view('pages.frontend.service-details', compact('metaog', 'serviceDetail'));
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

    private function getServiceDetails(): array
    {
        return [
            'architecture' => [
                'title' => 'Architecture',
                'tagline' => '',
                'paragraphs' => [
                    'Creating spaces Nurturing memories.',
                    'Our approach to architecture is based our philosophy in creating spaces using sustainable methods and appropriate materials to design spaces that are naturally lit, ventilated & that which offer thermal comfort. We believe that the quality of built environment has a significant influence on the user. We strive to make our projects reflect our core values and needs & aspirations of "the client and his family."',
                    'We strive towards simplicity less complex the design, better the spaces & the clearer the volume.',
                ],
                'subheading' => 'Our architectural practice is inspired by:',
                'quotes' => [
                    [
                        'author' => 'Ar. Laurie baker',
                        'text' => '“Good or bad design, or good or bad taste has little to do with colour, or form, or texture, or costliness—but that it has only to do with honesty and truth in the choice of materials and the method of using them.”',
                    ],
                    [
                        'author' => 'Ar. Jaisim',
                        'text' => "“Value recognized rather than inherent leads to innovation and provokes the imagination.”",
                    ],
                    [
                        'author' => 'Ar. Sanjay mohe',
                        'text' => '“Light as a building material adds a new dimension to build spaces, keeping it dynamic."',
                    ],
                ],
            ],
            'interiors' => [
                'title' => 'Interiors',
                'paragraphs' => [
                    'We believe that Interior design should help in accentuating the architectural spaces and not dominate them. It can be achieved through the use of design tools such as natural light, an appropriate scale & material and a simple approach. A responsible interior is one that considers comfort and aesthetics as primary and trend and costliness as secondary.',
                ],
            ],
            'public-projects' => [
                'title' => 'Public Projects',
                'sections' => [
                    [
                        'title' => 'Urban Spaces',
                        'paragraphs' => [
                            'In India public spaces are left undefined and undesigned. The public are not introduced and exposed to well-designed public spaces that provide safety & comfort and that is aesthetically appealing as well, unlike the cities in the developed countries.',
                            'We actively engage with the public and the administration to identify, study and design defunct public spaces and waterbodies, collaborate with other professionals and try to make them as active spaces contributing to the betterment of the city and the environment.',
                        ],
                        'quotes' => [
                            [
                                'text' => '“At every instant, there is more than the eye can see, more than the ear can hear, a setting or a view waiting to be explored. Nothing is experienced by itself, but always in relation to its surroundings, the sequences of events leading up to it, the memory of past experiences”- by Kevin lynch.',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Water Bodies',
                        'paragraphs' => [
                            'The water edges are the city’s biggest asset. There is a need to identify, revive, restore and reutilize these spaces for public engagement. They improve biodiversity, serve as a vital ecological asset, and promote the mental, cultural, and recreational well-being. They serve as an important and proud identity for the city and it populates areas are under threat from invasion, pollution, and rapid urbanization.',
                            'We believe tat reviving historic water systems and incorporating them into the city planning are key components of effective, sustainable development. We collaborate with other professionals and engage with the city administration in an effort to identify and revive them.',
                        ],
                    ],
                ],
            ],
        ];
    }

    private function encodeAssetPath(string $path): string
    {
        return implode('/', array_map('rawurlencode', explode('/', $path)));
    }
}
