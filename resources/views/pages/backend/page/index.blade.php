@extends('layouts.auth')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Page</h4>
                        <div class="page-title-right">
                            @if (auth()->user()->id == 1)
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pagenoaccess">
                                <i class="ri-add-line align-bottom me-1"></i> Create Page
                            </button>
                            @else
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newpage">
                                <i class="ri-add-line align-bottom me-1"></i> Create Page
                            </button>
                            @endif
                            <div class="modal fade newpage" id="newpage" data-bs-backdrop="static" tabindex="-1"
                                aria-hidden="true">
                                @include('pages.backend.page.create')
                            </div>
                            <div class="modal fade pagenoaccess" id="pagenoaccess" data-bs-backdrop="static" tabindex="-1"
                                aria-hidden="true">
                                @include('pages.backend.page.noaccess')
                            </div>
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
                                        <th>Page Code</th>
                                        <th>Name</th>
                                        <th>URL</th>
                                        <th>Update Date</th>
                                        <th>Meta & OG</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($page_datas as $keydata => $page_data)
                                        <tr>
                                            <td>{{ ++$keydata }}</td>
                                            <td>{{ $page_data->unique_code }}</td>
                                            <td>{{ $page_data->page_name }}</td>
                                            <td><a href="{{ env('APP_URL') }}/{{ $page_data->page_url }}"
                                                    target="_blank">/{{ $page_data->page_url }}</a></td>
                                            <td>{{ $page_data->updated_at->format('d M, Y') }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-light">Meta & OG Data</button>
                                            </td>
                                            @if (auth()->user()->id == 1)
                                            <td>
                                                <a href="#pagenoaccess{{ $page_data->unique_code }}">
                                                    <button class="btn btn-sm btn-soft-info" data-bs-toggle="modal"
                                                        data-bs-target="#pagenoaccess{{ $page_data->unique_code }}">Edit</button>
                                                </a>
                                                <a href="#pagenoaccess{{ $page_data->unique_code }}">
                                                    <button class="btn btn-sm btn-soft-danger" data-bs-toggle="modal"
                                                        data-bs-target="#pagenoaccess{{ $page_data->unique_code }}">Delete</button>
                                                </a>
                                            </td>
                                            @else
                                            <td>
                                                <a href="#pageedit{{ $page_data->unique_code }}">
                                                    <button class="btn btn-sm btn-soft-info" data-bs-toggle="modal"
                                                        data-bs-target="#pageedit{{ $page_data->unique_code }}">Edit</button>
                                                </a>
                                                <a href="#pagedelete{{ $page_data->unique_code }}">
                                                    <button class="btn btn-sm btn-soft-danger" data-bs-toggle="modal"
                                                        data-bs-target="#pagedelete{{ $page_data->unique_code }}">Delete</button>
                                                </a>
                                            </td>
                                            @endif
                                            <div class="modal fade pageedit{{ $page_data->unique_code }}"
                                                id="pageedit{{ $page_data->unique_code }}" data-bs-backdrop="static"
                                                tabindex="-1" aria-hidden="true">
                                                @include('pages.backend.page.edit')
                                            </div>
                                            <div class="modal fade pagedelete{{ $page_data->unique_code }}"
                                                id="pagedelete{{ $page_data->unique_code }}" data-bs-backdrop="static"
                                                tabindex="-1" aria-hidden="true">
                                                @include('pages.backend.page.delete')
                                            </div>
                                            <div class="modal fade pagenoaccess{{ $page_data->unique_code }}"
                                                id="pagenoaccess{{ $page_data->unique_code }}" data-bs-backdrop="static"
                                                tabindex="-1" aria-hidden="true">
                                                @include('pages.backend.page.noaccess')
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
