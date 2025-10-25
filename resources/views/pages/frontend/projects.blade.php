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
        <!-- Header Banner -->
        <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="4"
            data-background="{{ asset('assets/frontend/img/5.JPG') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-60">
                        <div class="subtitle"><a href="projects.html">Projects</a></div>
                        <div class="title">Creative Projects</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects -->
        <section class="projects section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="items mb-4">
                            <div class="con">
                                <div class="img">
                                    <img src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/01.JPG') }}"
                                        alt="">
                                </div>
                                <div class="info">
                                    <span class="category mb-0">Project P.01</span>
                                    <h6><a href="{{ route('projectdetails') }}">ARULMANI RESIDENCE</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Lets Talk -->
        @include('pages.frontend.layouts.cta')
    </div>
    @include('pages.frontend.layouts.footer')
    @include('pages.frontend.layouts.script')
</body>

</html>
