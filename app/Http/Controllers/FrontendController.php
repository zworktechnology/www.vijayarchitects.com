<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogmaster;
use App\Models\Meta;
use App\Support\ProjectCatalog;
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

    public function servicedetails(string $service)
    {
        $metaog = $this->getMetaForPage(7);
        $services = $this->getServiceDetails();
        $serviceDetail = $services[$service] ?? null;

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
