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
            min-height: 100vh;
            min-height: 100svh;
            height: 100vh;
            height: 100svh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
        }

        .video-bg video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
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
                <video id="home-banner-video" autoplay muted loop playsinline preload="auto"
                    data-src-mobile="{{ asset('assets/frontend/img/360X%20800.mp4') }}"
                    data-src-tablet-portrait="{{ asset('assets/frontend/img/768X%201024.mp4') }}"
                    data-src-tablet-landscape="{{ asset('assets/frontend/img/1024%20X%20768.mp4') }}"
                    data-src-desktop="{{ asset('assets/frontend/img/1920%20X%201080.mp4') }}"
                    data-src-wide="{{ asset('assets/frontend/img/800%20X%20360.mp4') }}">
                    <source src="{{ asset('assets/frontend/img/1920%20X%201080.mp4') }}" type="video/mp4">
                    Your browser does not support the video.
                </video>
            </div>
        </header>

        {{-- @include('pages.frontend.layouts.cta') --}}

    </div>

    @include('pages.frontend.layouts.footer')

    @include('pages.frontend.layouts.script')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bannerVideo = document.getElementById('home-banner-video');

            if (!bannerVideo) {
                return;
            }

            const selectBannerSource = function() {
                const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
                const viewportHeight = window.innerHeight || document.documentElement.clientHeight || 1;
                const viewportRatio = viewportWidth / viewportHeight;
                const isPortrait = viewportHeight > viewportWidth;

                if (isPortrait) {
                    return viewportWidth < 768 ? bannerVideo.dataset.srcMobile : bannerVideo.dataset.srcTabletPortrait;
                }

                if (viewportRatio >= 2) {
                    return bannerVideo.dataset.srcWide;
                }

                if (viewportRatio <= 1.45) {
                    return bannerVideo.dataset.srcTabletLandscape;
                }

                return bannerVideo.dataset.srcDesktop;
            };

            const applyBannerSource = function() {
                const nextSource = selectBannerSource();
                const activeSource = bannerVideo.getAttribute('data-active-src');

                if (!nextSource || nextSource === activeSource) {
                    return;
                }

                bannerVideo.setAttribute('data-active-src', nextSource);
                bannerVideo.pause();
                bannerVideo.src = nextSource;
                bannerVideo.load();

                const playPromise = bannerVideo.play();
                if (playPromise && typeof playPromise.catch === 'function') {
                    playPromise.catch(function() {});
                }
            };

            let resizeFrame = null;

            applyBannerSource();

            window.addEventListener('resize', function() {
                if (resizeFrame) {
                    window.cancelAnimationFrame(resizeFrame);
                }

                resizeFrame = window.requestAnimationFrame(function() {
                    applyBannerSource();
                    resizeFrame = null;
                });
            });

            window.addEventListener('orientationchange', applyBannerSource);
        });
    </script>

</body>

</html>
