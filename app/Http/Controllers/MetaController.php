<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MetaController extends Controller
{
    public function index()
    {
        $page_datas = Page::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();
        $meta_datas = Meta::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();

        return view('pages.backend.meta.index', compact('page_datas', 'meta_datas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
        ]);

        $data = new Meta();

        $data->unique_code = Str::random(5);

        $data->page_id = $request->get('page_id');

        $data->meta_title = $request->get('meta_title');
        $data->meta_description = $request->get('meta_description');
        $data->meta_keyword = $request->get('meta_keyword');

        $data->og_type = $request->get('og_type');
        $data->og_url = $request->get('og_url');
        $data->og_title = $request->get('og_title');
        $data->og_description = $request->get('og_description');
        $data->og_alt = $request->get('og_alt');

        $data->meta_note = $request->get('meta_note');

        if ($request->og_image != "") {
            $image = $request->og_image;
            $filename = $data->unique_code . '.' . $image->getClientOriginalExtension();
            $image->move('assets/backend/ogimage', $filename);
            $data->og_image = $filename;
        }

        $data->save();

        return redirect()->route('meta.index')->with('message', 'Meta Details Added to the page !');
    }

    public function update($unique_code, Request $request)
    {
        $request->validate([
            'page_id' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
        ]);

        $data = Meta::where('unique_code', '=', $unique_code)->first();

        $data->meta_title = $request->get('meta_title');
        $data->meta_description = $request->get('meta_description');
        $data->meta_keyword = $request->get('meta_keyword');

        $data->og_type = $request->get('og_type');
        $data->og_url = $request->get('og_url');
        $data->og_title = $request->get('og_title');
        $data->og_description = $request->get('og_description');
        $data->og_alt = $request->get('og_alt');

        $data->meta_note = $request->get('meta_note');

        $data->updated_at = Carbon::now();

        if ($request->file('og_image') != "") {
            $image = $request->og_image;
            $filename = $data->unique_code . '.' . $image->getClientOriginalExtension();
            $image->move('assets/backend/ogimage', $filename);
            $data->og_image = $filename;
        } else {
            $old_image = Meta::where('unique_code', '=', $unique_code)->first();
            $current_image = $old_image->og_image;
            $data->og_image = $current_image;
        }

        $data->update();

        return redirect()->route('meta.index')->with('message', 'Meta details Updated !');
    }

    public function softdelete($unique_code)
    {
        $data = Meta::where('unique_code', '=', $unique_code)->first();

        $data->soft_delete = 'Deleted';

        $data->update();

        return redirect()->route('meta.index')->with('warning', 'Meta Deleted !');
    }
}
