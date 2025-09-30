<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogmaster;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index()
    {
        $blog_datas = Blog::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();

        return view('pages.backend.blog.index', compact('blog_datas'));
    }

    public function create()
    {
        $blog_masters = Blogmaster::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();

        return view('pages.backend.blog.create', compact('blog_masters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_master_id' => 'required',
            'title' => 'required',
            'short_note' => 'required',
            'blog_content' => 'required',
            'blog_image' => 'required',
            'blog_img_alt' => 'required',
            'slug_url' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'og_title' => 'required',
            'og_description' => 'required',
            'writer_name' => 'required',
        ]);

        $data = new Blog();

        $data->unique_code = Str::random(5);

        $data->blog_master_id = $request->get('blog_master_id');

        $data->title = $request->get('title');
        $data->short_note = $request->get('short_note');
        $data->blog_content = $request->get('blog_content');
        $data->blog_img_alt = $request->get('blog_img_alt');
        if ($request->blog_image != "") {
            $image = $request->blog_image;
            $filename = $data->unique_code . '.' . $image->getClientOriginalExtension();
            $image->move('assets/backend/blogimage', $filename);
            $data->blog_image = $filename;
        }

        $data->slug_url = $request->get('slug_url');

        $data->meta_title = $request->get('meta_title');
        $data->meta_description = $request->get('meta_description');
        $data->meta_keyword = $request->get('meta_keyword');

        $data->og_type = 'blog';
        $data->og_url = 'null';
        $data->og_title = $request->get('og_title');
        $data->og_description = $request->get('og_description');

        $data->writer_name = $request->get('writer_name');
        $data->writer_email = 'blog@zworktechnology.com';
        $data->writer_website = 'https://zworktechnology.com/';

        $data->save();

        return redirect()->route('blog.index')->with('message', 'New Blog Added !');
    }

    public function edit($unique_code)
    {
        $blog_masters = Blogmaster::where('soft_delete', '=', Null)->orderBy('id', 'desc')->get();
        $blog = Blog::where('unique_code', '=', $unique_code)->first();

        return view('pages.backend.blog.edit', compact('blog_masters', 'blog'));
    }

    public function update($unique_code, Request $request)
    {
        $request->validate([
            'blog_master_id' => 'required',
            'title' => 'required',
            'short_note' => 'required',
            'blog_content' => 'required',
            'blog_img_alt' => 'required',
            'slug_url' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'og_title' => 'required',
            'og_description' => 'required',
            'writer_name' => 'required',
        ]);

        $data = Blog::where('unique_code', '=', $unique_code)->first();

        $data->blog_master_id = $request->get('blog_master_id');

        $data->title = $request->get('title');
        $data->short_note = $request->get('short_note');
        $data->blog_content = $request->get('blog_content');
        $data->blog_img_alt = $request->get('blog_img_alt');
        if ($request->file('blog_image') != "") {
            $image = $request->blog_image;
            $filename = $data->unique_code . '.' . $image->getClientOriginalExtension();
            $image->move('assets/backend/blogimage', $filename);
            $data->blog_image = $filename;
        } else {
            $old_image = Blog::where('unique_code', '=', $unique_code)->first();
            $current_image = $old_image->blog_image;
            $data->blog_image = $current_image;
        }

        $data->slug_url = $request->get('slug_url');

        $data->meta_title = $request->get('meta_title');
        $data->meta_description = $request->get('meta_description');
        $data->meta_keyword = $request->get('meta_keyword');

        $data->og_type = 'blog';
        $data->og_url = 'null';
        $data->og_title = $request->get('og_title');
        $data->og_description = $request->get('og_description');

        $data->writer_name = $request->get('writer_name');
        $data->writer_email = 'blog@zworktechnology.com';
        $data->writer_website = 'https://zworktechnology.com/';

        $data->update();

        return redirect()->route('blog.index')->with('message', 'Blog details Updated !');
    }

    public function lising($unique_code)
    {
        $data = Blog::where('unique_code', '=', $unique_code)->first();

        $data->listing = 'Active';

        $data->update();

        return redirect()->route('blog.index')->with('warning', 'Blog Active !');
    }

    public function unlising($unique_code)
    {
        $data = Blog::where('unique_code', '=', $unique_code)->first();

        $data->listing = 'In-Active';

        $data->update();

        return redirect()->route('blog.index')->with('warning', 'Blog In-Active !');
    }

    public function pin($unique_code)
    {
        $data = Blog::where('unique_code', '=', $unique_code)->first();

        $data->pinit = 'Pin';

        $data->update();

        return redirect()->route('blog.index')->with('warning', 'Blog Pined !');
    }

    public function unpin($unique_code)
    {
        $data = Blog::where('unique_code', '=', $unique_code)->first();

        $data->pinit = 'Un-Pin';

        $data->update();

        return redirect()->route('blog.index')->with('warning', 'Blog Un-Pined !');
    }

    public function softdelete($unique_code)
    {
        $data = Blog::where('unique_code', '=', $unique_code)->first();

        $data->soft_delete = 'Deleted';

        $data->update();

        return redirect()->route('blog.index')->with('warning', 'Blog Deleted !');
    }
}
