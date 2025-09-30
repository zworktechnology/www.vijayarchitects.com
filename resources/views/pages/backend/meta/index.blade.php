@extends('layouts.auth')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Meta & OG</h4>
                        {{-- @foreach ($meta_datas as $keydata => $meta_data) --}}
                        <div class="page-title-right">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newmetaog">
                                <i class="ri-add-line align-bottom me-1"></i> Connect Meta & OG
                            </button>
                            <div class="modal fade newmetaog" id="newmetaog" data-bs-backdrop="static" tabindex="-1"
                                aria-hidden="true">
                                @include('pages.backend.meta.create')
                            </div>
                        </div>
                        {{-- @endforeach --}}
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
                                        <th>Meta & OG Code</th>
                                        <th>Note</th>
                                        <th>Associated Page</th>
                                        <th>View Source</th>
                                        <th>Update Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($meta_datas as $keydata => $meta_data)
                                        <tr>
                                            <td>{{ ++$keydata }}</td>
                                            <td>{{ $meta_data->unique_code }}</td>
                                            <td>{{ $meta_data->mata_note }}</td>
                                            <td>{{ $meta_data->page->page_name }}</td>
                                            <td><a href="{{ env('APP_URL') }}/{{ $meta_data->page->page_name }}"
                                                    target="_blank">/{{ $meta_data->page->page_name }}</a></td>
                                            <td>{{ $meta_data->updated_at->format('d M, Y') }}</td>
                                            <td>
                                                <a href="#metaogedit{{ $meta_data->unique_code }}">
                                                    <button class="btn btn-sm btn-soft-info" data-bs-toggle="modal"
                                                        data-bs-target="#metaogedit{{ $meta_data->unique_code }}">Edit</button>
                                                </a>
                                                @if (auth()->user()->id == 1)
                                                <a href="#pagenoaccess{{ $page_data->unique_code }}">
                                                    <button class="btn btn-sm btn-soft-danger" data-bs-toggle="modal"
                                                        data-bs-target="#pagenoaccess{{ $page_data->unique_code }}">Delete</button>
                                                </a>
                                                @else
                                                <a href="#metaogdelete{{ $meta_data->unique_code }}">
                                                    <button class="btn btn-sm btn-soft-danger" data-bs-toggle="modal"
                                                        data-bs-target="#metaogdelete{{ $meta_data->unique_code }}">Delete</button>
                                                </a>
                                                @endif
                                            </td>
                                            <div class="modal fade metaogedit{{ $meta_data->unique_code }}"
                                                id="metaogedit{{ $meta_data->unique_code }}" data-bs-backdrop="static"
                                                tabindex="-1" aria-hidden="true">
                                                @include('pages.backend.meta.edit')
                                            </div>
                                            <div class="modal fade metaogdelete{{ $meta_data->unique_code }}"
                                                id="metaogdelete{{ $meta_data->unique_code }}" data-bs-backdrop="static"
                                                tabindex="-1" aria-hidden="true">
                                                @include('pages.backend.meta.delete')
                                            </div>
                                            <div class="modal fade pagenoaccess{{ $meta_data->unique_code }}"
                                                id="pagenoaccess{{ $meta_data->unique_code }}" data-bs-backdrop="static"
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
