<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('pages.frontend.layouts.metaog')

    @include('pages.frontend.layouts.headerstyle')

</head>

<body>

    @include('pages.frontend.layouts.preloader')

    @include('pages.frontend.layouts.header')

    <main>

        <!-- beadcrumb area start -->
        <div class="tp-breadcrumb__ptb tp-breadcrumb__bg p-relative z-index-1 fix"
            data-background="{{ asset('assets/frontend/img/breadcrumb/breadcrumb-9.webp') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="tp-breadcrumb__content p-relative">
                            <h3 class="tp-breadcrumb__title white">Our projects</h3>
                            <div class="tp-breadcrumb__list white">
                                <span><a href="{{ route('index') }}">Home</a></span>
                                <span > / </span>
                                <span>Our projects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- beadcrumb area end -->

        <!-- portfolio area start -->
        <section class="tp-portfolio-breadcrumb-ptb pt-130 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-portfolio-5-item p-relative mb-30">
                            <div class="tp-portfolio-5-thumb p-relative">
                                <img src="{{ asset('assets/frontend/img/portfolio/home-3/project1.webp') }}" alt>
                            </div>
                            <div class="tp-portfolio-5-content">
                                <p>On-grid Solar System</p>
                                <h4 class="tp-portfolio-5-title"><a>On-grid Solar
                                        System</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-portfolio-5-item p-relative mb-30">
                            <div class="tp-portfolio-5-thumb p-relative">
                                <img src="{{ asset('assets/frontend/img/portfolio/home-3/project2.webp') }}" alt>
                            </div>
                            <div class="tp-portfolio-5-content">
                                <p>Off-grid Solar System</p>
                                <h4 class="tp-portfolio-5-title"><a>Off-grid Solar
                                        System</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-portfolio-5-item p-relative mb-30">
                            <div class="tp-portfolio-5-thumb p-relative">
                                <img src="{{ asset('assets/frontend/img/portfolio/home-3/project3.webp') }}" alt>
                            </div>
                            <div class="tp-portfolio-5-content">
                                <p>Hybrid Solar System</p>
                                <h4 class="tp-portfolio-5-title"><a>Hybrid Solar
                                        System</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-portfolio-5-item p-relative mb-30">
                            <div class="tp-portfolio-5-thumb p-relative">
                                <img src="{{ asset('assets/frontend/img/portfolio/home-3/project4.webp') }}" alt>
                            </div>
                            <div class="tp-portfolio-5-content">
                                <p>Street Light System</p>
                                <h4 class="tp-portfolio-5-title"><a>Street Light
                                        System</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-portfolio-5-item p-relative mb-30">
                            <div class="tp-portfolio-5-thumb p-relative">
                                <img src="{{ asset('assets/frontend/img/portfolio/home-3/project5.webp') }}" alt>
                            </div>
                            <div class="tp-portfolio-5-content">
                                <p>Solar Water Pumping</p>
                                <h4 class="tp-portfolio-5-title"><a>Solar Water
                                        Pumping</a></h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- portfolio area end -->

    </main>

</body>

@include('pages.frontend.layouts.footer')

@include('pages.frontend.layouts.backtotop')
@include('pages.frontend.layouts.script')

</html>
