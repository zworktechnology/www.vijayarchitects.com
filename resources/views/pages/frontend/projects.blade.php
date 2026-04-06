@php
    $projectAsset = static function (string $path): string {
        return asset(implode('/', array_map('rawurlencode', explode('/', $path))));
    };

    $projects = [
        [
            'route' => 'arulmanihouse',
            'title' => 'ARULAMNI RESIDENCE',
            'location' => 'Coimbatore',
            'image' => 'assets/frontend/img/projects/1.Mr.Arulmani/1.Top Cover Photo & fact sheet/1.Cover image/01000.jpg',
        ],
        [
            'route' => 'thethinnaihouse',
            'title' => 'The Thinnai House',
            'location' => 'Trichy',
            'image' => 'assets/frontend/img/projects/2.The Thinnai house (Dr.Anand House_/1.Top Cover Photo & fact sheet/1.Cover image/COVER IMAGE.jpg',
        ],
        [
            'route' => 'ravichandranhouse',
            'title' => 'RAVICHANDRAN RESIDENCE',
            'location' => 'Trichy',
            'image' => 'assets/frontend/img/projects/3.Mr. Ravichandran House/1.Top Cover Photo/1. Cover image/cover image_Size changed_Ravichandran residence.jpg',
        ],
        [
            'route' => 'baskershanthiresidence',
            'title' => 'Er. Basker & Mrs. Shanthi Residence',
            'location' => 'Trichy',
            'image' => 'assets/frontend/img/projects/4. Er. Basker and Mrs.Shanthi residence/1.Top Cover Photo/1. cover image/size change_Basker residence.jpg',
        ],
        [
            'route' => 'hindustanschoolofarchitecture',
            'title' => 'Hindustan School of Architecture',
            'location' => 'Coimbatore',
            'image' => 'assets/frontend/img/projects/5.Hindustan school of architecture/1.Top Cover Photo/1. Cover image/Size changed_Hindustan school of architecture.jpg',
        ],
        [
            'route' => 'yercaudhouse',
            'title' => 'YERCAUD GUEST HOUSE',
            'location' => 'Yercaud',
            'image' => 'assets/frontend/img/projects/6.Yercaud Guest  House/1.Top Cover Photo/01.jpg',
        ],
    ];
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
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6">
                            <a href="{{ route($project['route']) }}">
                                <div class="items mb-4">
                                    <div class="con">
                                        <div class="img">
                                            <img src="{{ $projectAsset($project['image']) }}"
                                                alt="{{ $project['title'] }}">
                                        </div>
                                        <div class="info">
                                            <span class="category mb-0">{{ $project['location'] }}</span>
                                            <h6>{{ $project['title'] }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
    @include('pages.frontend.layouts.footer')
    @include('pages.frontend.layouts.script')
</body>

</html>
