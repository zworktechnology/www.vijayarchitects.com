<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $page_datas = Page::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();

        return view('pages.backend.page.index', compact('page_datas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_name' => 'required',
            'page_url' => 'required|unique:pages,page_url',
        ]);

        $data = new Page();

        $data->unique_code = Str::random(5);

        $data->page_name = $request->get('page_name');
        $data->page_note = $request->get('page_note');
        $data->page_url = $request->get('page_url');

        $data->save();

        return redirect()->route('page.index')->with('message', 'New Page Added !');
    }

    public function update($unique_code, Request $request)
    {
        $request->validate([
            'page_name' => 'required',
            'page_url' => 'required',
        ]);

        $data = Page::where('unique_code', '=', $unique_code)->first();

        $data->page_name = $request->get('page_name');
        $data->page_note = $request->get('page_note');
        $data->page_url = $request->get('page_url');

        $data->updated_at = Carbon::now();

        $data->update();

        return redirect()->route('page.index')->with('message', 'Page details Updated !');
    }

    public function softdelete($unique_code)
    {
        $data = Page::where('unique_code', '=', $unique_code)->first();

        $data->soft_delete = 'Deleted';

        $data->update();

        return redirect()->route('page.index')->with('warning', 'Page Deleted !');
    }
}
