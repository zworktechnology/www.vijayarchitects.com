@extends('layouts.auth')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <form autocomplete="off" method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row g-3">
                                        <div class="col-xxl-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="title">Master<span class="text-danger">
                                                        *</span></label>
                                                <select name="blog_master_id" id="blog_master_create">
                                                    <option selected disabled>Select Master</option>
                                                    @foreach ($blog_masters as $blog_master)
                                                        <option value="{{ $blog_master->id }}"
                                                            {{ old('blog_master_id') == $blog_master->id ? 'selected' : '' }}>
                                                            {{ $blog_master->master_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl-8">
                                            <div class="mb-3">
                                                <label class="form-label" for="title">Title<span class="text-danger">
                                                        *</span></label>
                                                <input type="text"
                                                    class="form-control @error('title') border border-danger @enderror"
                                                    id="title" placeholder="Title" autofocus spellcheck="true"
                                                    name="title" value="{{ old('title') }}">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="title">Slug URL<span class="text-danger">
                                                    *</span></label>
                                            <input type="text"
                                                class="form-control @error('slug_url') border border-danger @enderror"
                                                id="textInput" placeholder="Slug-url" autofocus spellcheck="true"
                                                name="slug_url" value="{{ old('slug_url') }}">
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="mb-3">
                                                <label class="form-label">Image<span class="text-danger"> *</span></label>
                                                <input
                                                    class="form-control @error('blog_image') border border-danger @enderror"
                                                    type="file" id="blog_image" name="blog_image"
                                                    value="{{ old('blog_image') }}">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="title">Alt<span class="text-danger">
                                                        *</span></label>
                                                <input type="text"
                                                    class="form-control @error('blog_img_alt') border border-danger @enderror"
                                                    id="blog_img_alt" placeholder="alt" autofocus spellcheck="true"
                                                    name="blog_img_alt" value="{{ old('blog_img_alt') }}">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="project-thumbnail-img">Short Note<span
                                                    class="text-danger"> *</span></label>
                                            <textarea type="text" class="form-control @error('short_note') border border-danger @enderror" rows="3"
                                                spellcheck="true" name="short_note" id="short_note" placeholder="Short Note" value="{{ old('short_note') }}"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Blog<span class="text-danger"> *</span></label>
                                            <textarea type="text" class="form-control @error('blog_content') border border-danger @enderror" rows="3"
                                                spellcheck="true" name="blog_content" id="myeditorinstance" placeholder="Blog" value="{{ old('blog_content') }}"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title<span class="text-danger">
                                                *</span></label>
                                        <input type="text"
                                            class="form-control @error('meta_title') border border-danger @enderror"
                                            id="meta_title" placeholder="Best Service Provider For You..."
                                            name="meta_title" spellcheck="true" value="{{ old('meta_title') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description<span class="text-danger">
                                                *</span></label>
                                        <input type="text"
                                            class="form-control @error('meta_description') border border-danger @enderror"
                                            id="meta_description" placeholder="We provide..." name="meta_description"
                                            spellcheck="true" value="{{ old('meta_description') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="keyword" class="form-label">Keyword<span class="text-danger">
                                                *</span></label>
                                        <input type="text"
                                            class="form-control @error('meta_keyword') border border-danger @enderror"
                                            id="meta_keyword" placeholder="Ex. Keyword 1, Keyword 2,..."
                                            name="meta_keyword" spellcheck="true" value="{{ old('meta_keyword') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">OG Tag</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title<span class="text-danger">
                                                *</span></label>
                                        <input type="text"
                                            class="form-control @error('og_title') border border-danger @enderror"
                                            id="og_title" placeholder="Best Service Provider For You" name="og_title"
                                            spellcheck="true" value="{{ old('og_title') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description<span class="text-danger">
                                                *</span></label>
                                        <input type="text"
                                            class="form-control @error('og_description') border border-danger @enderror"
                                            id="og_description" placeholder="We provide..." name="og_description"
                                            spellcheck="true" value="{{ old('og_description') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Writer</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="type" class="form-label">Name<span class="text-danger">
                                                *</span></label>
                                        <input type="text"
                                            class="form-control @error('writer_name') border border-danger @enderror"
                                            id="writer_name" placeholder="Website" name="writer_name" spellcheck="true"
                                            value="{{ old('writer_name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end mb-4">
                                <a href="{{ route('blog.index') }}">
                                    <button type="button" class="btn btn-danger w-sm">Cancel</button>
                                </a>
                                <button type="submit" class="btn btn-primary w-sm">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
