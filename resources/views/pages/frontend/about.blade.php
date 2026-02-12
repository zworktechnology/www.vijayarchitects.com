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
            data-background="{{ asset('assets/frontend/img/SIVAGAMIARKNAGAR.jpg') }}"
            style="background-position: top top">
        </div>

        <!-- About -->
        <section class="about mt-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">About Us</div>
                    </div>
                    <div class="col-lg-4 col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title">VIJAY <span>ARCHITECTS</span></div>
                        <p>At Vijay Architect, we believe architecture is more than design — it’s the art of giving form
                            to imagination. Based in Trichy, Tamil Nadu, our award-winning team of architects and
                            designers specialize in creating luxurious residences, contemporary commercial spaces, and
                            sustainable developments that redefine modern living. </p>

                        <p>Every project we design reflects a fusion of functionality, aesthetics, and cultural essence,
                            crafted with precision to deliver timeless elegance. From initial concept to final detail,
                            we ensure your vision transforms into a masterpiece that stands as a landmark.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="wrap">
                            <div class="con"> <img src="{{ asset('assets/frontend/img/teams/01_VIJAYKUMAR SENGOTTUVELAN.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="info">
                                    <h4 class="name">Ar. VIJAY</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="services section-padding">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="section-title">Our <span>Services</span></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-2 animate-box" data-animate-effect="fadeInUp">
                        <div class="item bg-1">
                            <div class="con">
                                <a href="#">
                                    <h5>Architecture</h5>
                                    <p>We craft spaces that inspire — blending modern design, structural precision, and
                                        timeless aesthetics to create iconic residential and commercial landmarks.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2 animate-box" data-animate-effect="fadeInUp">
                        <div class="item bg-2">
                            <div class="con">
                                <a href="#">
                                    <h5>Interior Design</h5>
                                    <p>From concept to finishing touches, our interiors reflect your personality —
                                        merging elegance, functionality, and luxury in every corner.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2 animate-box" data-animate-effect="fadeInUp">
                        <div class="item bg-3">
                            <div class="con">
                                <a href="#">
                                    <h5>Public Projects</h5>
                                    <p>We shape vibrant urban environments through thoughtful planning, sustainable
                                        layouts, and human-centered architectural vision.</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Team -->
        <section class="team section-padding">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="section-title">Our <span>Teams</span></div>

                    </div>
                </div>
                <div class="row mb-5 animate-box" data-animate-effect="fadeInUp">
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/01_VIJAYKUMAR SENGOTTUVELAN.jpg') }}"
                                class="" alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-4">
                        <div class="card shadow-sm ">
                            <img src="{{ asset('assets/frontend/img/teams/01A_R.BASKER.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/02_K.SHANTHI.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/03_K.SHIVAKUMAR.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/04_ANITHA CATHERINE.jpg') }}"
                                class="" alt="w-100 h-100 rounded-sm" />
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/05_SUDHAMAN ARPUTHAVEL.jpg') }}"
                                class="" alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/06_R. RAMESHWARI.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/07_D. SELVI.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/08_THEISHINYAA EMPERUMAL.jpg') }}"
                                class="" alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/09_DEEPAK KUMAR.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/11_M. SATHIYA MOORTHY.jpg') }}"
                                class="" alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/13_K.MOHAN BALAJI.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/14_SAHAYARAJ.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/15_DIXON.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/16_SASIKUMAR.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/frontend/img/teams/17.PEPPER.jpg') }}" class=""
                                alt="w-100 h-100 rounded-sm" />
                        </div>
                        <div class="text-center mt-2"><strong>Ar. Vijay - Founder</strong></div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    @include('pages.frontend.layouts.footer')

    @include('pages.frontend.layouts.script')
</body>

</html>
