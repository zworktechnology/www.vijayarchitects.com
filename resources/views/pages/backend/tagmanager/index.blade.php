@extends('layouts.auth')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @foreach ($tag_datas as $keydata => $tag_data)
                @if ($totaldata > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tag Manager & Site Verifiction</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Last Update</a></li>
                                        <li class="breadcrumb-item active">{{ $tag_data->updated_at->format('d M, Y') }}</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tag Manager & Site Verifiction</h4>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            @foreach ($tag_datas as $keydata => $tag_data)
                @if ($totaldata > 0)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form autocomplete="off" method="POST"
                                        action="{{ route('tagmanager.update', ['unique_code' => $tag_data->unique_code]) }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-xxl-6 mb-3">
                                                <div>
                                                    <label for="name" class="form-label">Script<span
                                                            class="text-danger">
                                                            *</span></label>
                                                    <textarea type="text" class="form-control @error('script') border border-danger @enderror" rows="10"
                                                        spellcheck="true" name="script" id="script"
                                                        placeholder="
                                                            <script>
                                                                window.dataLayer = window.dataLayer || [];

                                                                function gtag() {
                                                                    dataLayer.push(arguments);
                                                                }
                                                                gtag('js', new Date());
                                                                gtag('config', 'xxxxxxxxxxxx');
                                                            </script>">
                                                            {!! old('script', $tag_data->script) !!}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 mt-3 mb-3">
                                                <div>
                                                    <label for="name" class="form-label">No Script<span
                                                            class="text-danger">
                                                            *</span></label>
                                                    <textarea type="text" class="form-control @error('no_script') border border-danger @enderror" rows="10"
                                                        spellcheck="true" name="no_script" id="no_script"
                                                        placeholder="
                                                            <noscript>
                                                                <iframe src='https://www.googletagmanager.com/ns.html?id=GTM-MLFN2R5S' height='0' width='0' style='display:none;visibility:hidden'></iframe>
                                                            </noscript>">
                                                            {!! old('no_script', $tag_data->no_script) !!}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 mt-3 mb-3">
                                                <div>
                                                    <label for="name" class="form-label">Site Verifiction
                                                        Code</label>
                                                    <input type="text"
                                                        class="form-control @error('site_verify') border border-danger @enderror"
                                                        id="site_verify"
                                                        placeholder="<meta name='google-site-verification' content='ABcDEF-Ad4fkmsf3298dndkkposd9eenkmnDAsA' />"
                                                        name="site_verify" spellcheck="true" autofocus
                                                        value="{{ old('site_verify', $tag_data->site_verify) }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-3">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form autocomplete="off" method="POST" action="{{ route('tagmanager.store') }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-xxl-6 mb-3">
                                                <div>
                                                    <label for="name" class="form-label">Script<span
                                                            class="text-danger">
                                                            *</span></label>
                                                    <textarea type="text" class="form-control @error('script') border border-danger @enderror" rows="10"
                                                        spellcheck="true" name="script" id="script"
                                                        placeholder="
                                        <script>
                                            window.dataLayer = window.dataLayer || [];

                                            function gtag() {
                                                dataLayer.push(arguments);
                                            }
                                            gtag('js', new Date());
                                            gtag('config', 'xxxxxxxxxxxx');
                                        </script>" value="{{ old('script') }}"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 mt-3 mb-3">
                                                <div>
                                                    <label for="name" class="form-label">No Script<span
                                                            class="text-danger">
                                                            *</span></label>
                                                    <textarea type="text" class="form-control @error('no_script') border border-danger @enderror" rows="10"
                                                        spellcheck="true" name="no_script" id="no_script"
                                                        placeholder="
                                        <noscript>
                                            <iframe src='https://www.googletagmanager.com/ns.html?id=GTM-MLFN2R5S' height='0' width='0' style='display:none;visibility:hidden'></iframe>
                                        </noscript>"
                                                        value="{{ old('no_script') }}"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 mt-3 mb-3">
                                                <div>
                                                    <label for="name" class="form-label">Site Verifiction
                                                        Code</label>
                                                    <input type="text"
                                                        class="form-control @error('site_verify') border border-danger @enderror"
                                                        id="site_verify"
                                                        placeholder="<meta name='google-site-verification' content='ABcDEF-Ad4fkmsf3298dndkkposd9eenkmnDAsA' />"
                                                        name="site_verify" spellcheck="true" autofocus
                                                        value="{{ old('site_verify') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-3">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
@endsection
