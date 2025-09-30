<?php

namespace App\Http\Controllers;

use App\Models\Blogmaster;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogmasterController extends Controller
{
    public function index()
    {
        $blog_master_datas = Blogmaster::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();

        return view('pages.backend.blogmaster.index', compact('blog_master_datas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'master_name' => 'required',
            'master_url' => 'required',
        ]);

        $data = new Blogmaster();

        $data->unique_code = Str::random(5);

        $data->master_name = $request->get('master_name');
        $data->master_url = $request->get('master_url');

        $data->save();

        return redirect()->route('blogmaster.index')->with('message', 'New Blog Master Added !');
    }

    public function update($unique_code, Request $request)
    {
        $request->validate([
            'master_name' => 'required',
            'master_url' => 'required',
        ]);

        $data = Blogmaster::where('unique_code', '=', $unique_code)->first();

        $data->master_name = $request->get('master_name');
        $data->master_url = $request->get('master_url');

        $data->updated_at = Carbon::now();

        $data->update();

        return redirect()->route('blogmaster.index')->with('message', 'Blog Master Updated !');
    }

    public function softdelete($unique_code)
    {
        $data = Blogmaster::where('unique_code', '=', $unique_code)->first();

        $data->soft_delete = 'Deleted';

        $data->update();

        return redirect()->route('blogmaster.index')->with('warning', 'Blog Master Deleted !');
    }
}
