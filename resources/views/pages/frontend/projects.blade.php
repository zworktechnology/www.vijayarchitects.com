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

        <!-- Projects -->
        <section class="projects section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('arulmanihouse') }}">
                        <div class="items mb-4">
                            <div class="con">
                                <div class="img">
                                    <img src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/01.JPG') }}"
                                        alt="">
                                </div>
                                <div class="info">
                                    <span class="category mb-0">Coimbatore</span>
                                    <h6><a href="{{ route('arulmanihouse') }}">Mr. Arulmani House</a></h6>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('thethinnaihouse') }}">
                        <div class="items mb-4">
                            <div class="con">
                                <div class="img">
                                    <img src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/01.JPG') }}"
                                        alt="">
                                </div>
                                <div class="info">
                                    <span class="category mb-0">Tiruchirappalli</span>
                                    <h6><a href="{{ route('thethinnaihouse') }}">The Thinnai House</a></h6>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('ravichandranhouse') }}">
                        <div class="items mb-4">
                            <div class="con">
                                <div class="img">
                                    <img src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/01.JPG') }}"
                                        alt="">
                                </div>
                                <div class="info">
                                    <span class="category mb-0">Tiruchirappalli</span>
                                    <h6><a href="{{ route('ravichandranhouse') }}">Mr.Ravichandran  House</a></h6>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('baskershanthiresidence') }}">
                        <div class="items mb-4">
                            <div class="con">
                                <div class="img">
                                    <img src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/01.JPG') }}"
                                        alt="">
                                </div>
                                <div class="info">
                                    <span class="category mb-0">Tiruchirappalli</span>
                                    <h6><a href="{{ route('baskershanthiresidence') }}">Er.Basker & Mrs.Shanthi Residence</a></h6>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('hindustanschoolofarchitecture') }}">
                        <div class="items mb-4">
                            <div class="con">
                                <div class="img">
                                    <img src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/01.JPG') }}"
                                        alt="">
                                </div>
                                <div class="info">
                                    <span class="category mb-0">Coimbatore</span>
                                    <h6><a href="{{ route('hindustanschoolofarchitecture') }}">Hindustan School of Architecture</a></h6>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('yercaudhouse') }}">
                        <div class="items mb-4">
                            <div class="con">
                                <div class="img">
                                    <img src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/01.JPG') }}"
                                        alt="">
                                </div>
                                <div class="info">
                                    <span class="category mb-0">Yercaud</span>
                                    <h6><a href="{{ route('yercaudhouse') }}">Yercaud House</a></h6>
                                </div>
                            </div>
                        </div>
                        </a>
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
