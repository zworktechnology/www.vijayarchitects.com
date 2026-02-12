<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('pages.frontend.layouts.metaog')

    @include('pages.frontend.layouts.headerstyle')

    @turnstileScripts()
    <style>
        .video-bg {

            width: 100vw;
            height: 100vh;
            overflow: hidden;

        }

        .video-bg video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* ensures full screen */
        }
    </style>
</head>

<body>
    <div class="content-wrapper">

        @include('pages.frontend.layouts.preloader')

        @include('pages.frontend.layouts.header')

        <!-- Slider -->
        <header id="slider-area" class="header slider-fade">
            <div class="video-bg">
                <video autoplay muted loop playsinline>
                    <source src="{{ asset('assets/frontend/img/banner.mp4') }}" type="video/mp4">
                    Your browser does not support the video.
                </video>
            </div>
        </header>

        {{-- @include('pages.frontend.layouts.cta') --}}

    </div>

    @include('pages.frontend.layouts.footer')

    @include('pages.frontend.layouts.script')

</body>

</html>
