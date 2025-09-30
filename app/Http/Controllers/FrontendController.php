<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogmaster;
use App\Models\Meta;
use Illuminate\Http\Request;

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

        return view('pages.frontend.about', compact('metaog'));
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
}
