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
            data-background="{{ asset('assets/frontend/img/about_banner.jpg') }}"
            style="background-position: top top">
        </div>

        <!-- About -->
        <section class="about">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-8 col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title">VIJAY <span>ARCHITECTS</span></div>
                        <p>Vijay architects established in the year 1986 as “Functional Forms”, a design-build firm
                            primarily focusing on aesthetic and functionality. Over years the firm was reestablished as
                            Vijay Architects, a design firm, engaged in striving to create a built environment that
                            achieves better thermal comfort through passive design techniques.</p>

                        <p>Our focus has since been on creating a sustainable built environment that is context
                            specific, environmentally sensitive and uses appropriate materials, natural lighting and
                            ventilation to achieve thermal comfort.</p>

                        <p>We are a multidisciplinary practice, offering design services encompassing Residential,
                            Institutional, Interior design and architectural intervention in Urban public spaces and
                            water bodies.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="wrap">
                            <div class="con"> <img src="{{ asset('assets/frontend/img/about_person.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="info">
                                    <h4 class="name">Vijaykumar - FOUNDER</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="services">
            <div class="container">
                <div class="row">
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
        <section class="team">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="section-title">Our <span>Team</span></div>

                    </div>
                </div>
                <div class="row mb-5 animate-box" data-animate-effect="fadeInUp">
                    @foreach ($teamMembers as $member)
                        <div class="col-md-4 mt-4">
                            <div class="card shadow-sm">
                                <img src="{{ $member['image'] }}" class="w-100 h-100 rounded-sm"
                                    alt="{{ $member['display_name'] }}" />
                            </div>
                            <div class="text-center mt-2">
                                <strong>{{ $member['name'] }}{{ $member['position'] !== '' ? ' - ' . $member['position'] : '' }}</strong>
                            </div>
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
