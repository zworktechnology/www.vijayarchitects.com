@extends('layouts.auth')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Blog Master</h4>
                        <div class="page-title-right">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newblogmaster">
                                <i class="ri-add-line align-bottom me-1"></i> Create Master
                            </button>
                            <div class="modal fade newblogmaster" id="newblogmaster" data-bs-backdrop="static" tabindex="-1"
                                aria-hidden="true">
                                @include('pages.backend.blogmaster.create')
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blog_master_datas as $keydata => $blog_master_data)
                                        <tr>
                                            <td>{{ ++$keydata }}</td>
                                            <td>{{ $blog_master_data->unique_code }}</td>
                                            <td>{{ $blog_master_data->master_name }}</td>
                                            <td><a href="{{ env('APP_URL') }}/{{ $blog_master_data->master_url }}"
                                                    target="_blank">/{{ $blog_master_data->master_url }}</a></td>
                                            <td>{{ $blog_master_data->updated_at->format('d M, Y') }}</td>
                                            <td>
                                                <a href="#blogmasteredit{{ $blog_master_data->unique_code }}">
                                                    <button class="btn btn-sm btn-soft-info" data-bs-toggle="modal"
                                                        data-bs-target="#blogmasteredit{{ $blog_master_data->unique_code }}">Edit</button>
                                                </a>
                                                <a href="#blogmasterdelete{{ $blog_master_data->unique_code }}">
                                                    <button class="btn btn-sm btn-soft-danger" data-bs-toggle="modal"
                                                        data-bs-target="#blogmasterdelete{{ $blog_master_data->unique_code }}">Delete</button>
                                                </a>
                                            </td>
                                            <div class="modal fade blogmasteredit{{ $blog_master_data->unique_code }}"
                                                id="blogmasteredit{{ $blog_master_data->unique_code }}" data-bs-backdrop="static"
                                                tabindex="-1" aria-hidden="true">
                                                @include('pages.backend.blogmaster.edit')
                                            </div>
                                            <div class="modal fade blogmasterdelete{{ $blog_master_data->unique_code }}"
                                                id="blogmasterdelete{{ $blog_master_data->unique_code }}" data-bs-backdrop="static"
                                                tabindex="-1" aria-hidden="true">
                                                @include('pages.backend.blogmaster.delete')
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
