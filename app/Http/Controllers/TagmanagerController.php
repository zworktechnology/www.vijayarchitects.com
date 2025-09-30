<?php

namespace App\Http\Controllers;

use App\Models\Tagmanager;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TagmanagerController extends Controller
{
    public function index()
    {
        $tag_datas = Tagmanager::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();
        $totaldata = Tagmanager::count();

        return view('pages.backend.tagmanager.index', compact('tag_datas', 'totaldata'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'script' => 'required',
            'no_script' => 'required',
        ]);

        $data = new Tagmanager();

        $data->unique_code = Str::random(5);

        $data->script = $request->get('script');
        $data->no_script = $request->get('no_script');
        $data->site_verify = $request->get('site_verify');

        $data->save();

        return redirect()->route('tagmanager.index')->with('message', 'New Tag Manager Added !');
    }

    public function update($unique_code, Request $request)
    {
        $request->validate([
            'script' => 'required',
            'no_script' => 'required',
        ]);

        $data = Tagmanager::where('unique_code', '=', $unique_code)->first();

        $data->script = $request->get('script');
        $data->no_script = $request->get('no_script');
        $data->site_verify = $request->get('site_verify');

        $data->updated_at = Carbon::now();

        $data->update();

        return redirect()->route('tagmanager.index')->with('message', 'Tag details Updated !');
    }

    public function softdelete($unique_code)
    {
        $data = Tagmanager::where('unique_code', '=', $unique_code)->first();

        $data->soft_delete = 'Deleted';

        $data->update();

        return redirect()->route('tagmanager.index')->with('warning', 'Tag Deleted !');
    }
}
