@php
    $projectAsset = static function (string $path): string {
        return asset(implode('/', array_map('rawurlencode', explode('/', $path))));
    };
@endphp
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('pages.frontend.layouts.metaog')

    @include('pages.frontend.layouts.headerstyle')
    @turnstileScripts()
</head>

<body>
    <div class="content-wrapper">
        @include('pages.frontend.layouts.preloader')

        @include('pages.frontend.layouts.header')

        <section class="projects section-padding">
            <div class="container">
                <div class="row">
                    @forelse ($projects as $project)
                        <div class="col-lg-4 col-md-6">
                            <a href="{{ route('projects.show', $project['slug']) }}">
                                <div class="items mb-4">
                                    <div class="con">
                                        <div class="img">
                                            <img src="{{ $projectAsset($project['thumbnail_image'] ?? $project['cover_image']) }}"
                                                alt="{{ $project['title'] }}">
                                        </div>
                                        <div class="info">
                                            <span class="category mb-0">{{ $project['location'] ?? 'Vijay Architects' }}</span>
                                            <h6>{{ $project['title'] }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12">
                            <p>No projects found in the configured upload structure.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

    </div>
    @include('pages.frontend.layouts.footer')
    @include('pages.frontend.layouts.script')
</body>

</html>
