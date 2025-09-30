@extends('layouts.auth')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Blog</h4>
                        <div class="page-title-right">
                            <a href="{{ route('blog.create') }}">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#newblogmaster">
                                    <i class="ri-add-line align-bottom me-1"></i> Create Blog
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="mytable"
                                class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SR No.</th>
                                        <th>Blog Code</th>
                                        <th>Master</th>
                                        <th>Title</th>
                                        <th>URL</th>
                                        <th>Update Date</th>
                                        <th>Listing</th>
                                        <th>Pinned</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blog_datas as $keydata => $blog_data)
                                        <tr>
                                            <td>{{ ++$keydata }}</td>
                                            <td>{{ $blog_data->unique_code }}</td>
                                            <td>{{ $blog_data->blogmaster->master_name }}</td>
                                            <td>{{ $blog_data->title }}</td>
                                            <td><a href="{{ env('APP_URL') }}/{{ $blog_data->slug_url }}/{{ $blog_data->unique_code }}"
                                                    target="_blank">/{{ $blog_data->slug_url }}/{{ $blog_data->unique_code }}</a>
                                            </td>
                                            <td>{{ $blog_data->updated_at->format('d M, Y') }}</td>
                                            @if ($blog_data->listing == 'Active')
                                                <td class="text-success">Listed</td>
                                            @else
                                                <td class="text-danger">Un Listed</td>
                                            @endif
                                            @if ($blog_data->pinit == 'Pin')
                                                <td class="text-success">Pined</td>
                                            @else
                                                <td class="text-danger">Un Pined</td>
                                            @endif
                                            <td>
                                                @if ($blog_data->listing == 'Active')
                                                    <a href="#bloglist{{ $blog_data->unique_code }}">
                                                        <button class="btn btn-sm btn-soft-secondary" data-bs-toggle="modal"
                                                            data-bs-target="#bloglist{{ $blog_data->unique_code }}">Un-List</button>
                                                    </a>
                                                @else
                                                    <a href="#bloglist{{ $blog_data->unique_code }}">
                                                        <button class="btn btn-sm btn-soft-secondary" data-bs-toggle="modal"
                                                            data-bs-target="#bloglist{{ $blog_data->unique_code }}">List</button>
                                                    </a>
                                                @endif
                                                @if ($blog_data->pinit == 'Pin')
                                                    <a href="#blogpin{{ $blog_data->unique_code }}">
                                                        <button class="btn btn-sm btn-soft-dark" data-bs-toggle="modal"
                                                            data-bs-target="#blogpin{{ $blog_data->unique_code }}">Un-Pin</button>
                                                    </a>
                                                @else
                                                    <a href="#blogpin{{ $blog_data->unique_code }}">
                                                        <button class="btn btn-sm btn-soft-dark" data-bs-toggle="modal"
                                                            data-bs-target="#blogpin{{ $blog_data->unique_code }}">Pin</button>
                                                    </a>
                                                @endif
                                                <a
                                                    href="{{ route('blog.edit', ['unique_code' => $blog_data->unique_code]) }}">
                                                    <button class="btn btn-sm btn-soft-info" data-bs-toggle="modal"
                                                        data-bs-target="#blogmasteredit{{ $blog_data->unique_code }}">Edit</button>
                                                </a>
                                                <a href="#blogdelete{{ $blog_data->unique_code }}">
                                                    <button class="btn btn-sm btn-soft-danger" data-bs-toggle="modal"
                                                        data-bs-target="#blogdelete{{ $blog_data->unique_code }}">Delete</button>
                                                </a>
                                            </td>
                                            <div class="modal fade bloglist{{ $blog_data->unique_code }}"
                                                id="bloglist{{ $blog_data->unique_code }}" data-bs-backdrop="static"
                                                tabindex="-1" aria-hidden="true">
                                                @include('pages.backend.blog.list')
                                            </div>
                                            <div class="modal fade blogpin{{ $blog_data->unique_code }}"
                                                id="blogpin{{ $blog_data->unique_code }}" data-bs-backdrop="static"
                                                tabindex="-1" aria-hidden="true">
                                                @include('pages.backend.blog.pin')
                                            </div>
                                            <div class="modal fade blogdelete{{ $blog_data->unique_code }}"
                                                id="blogdelete{{ $blog_data->unique_code }}" data-bs-backdrop="static"
                                                tabindex="-1" aria-hidden="true">
                                                @include('pages.backend.blog.delete')
                                            </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
