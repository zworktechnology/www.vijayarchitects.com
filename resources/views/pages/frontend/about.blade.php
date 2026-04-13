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
        <div class="banner-header about-banner-header">
            <img src="{{ asset('assets/frontend/img/about_banner.jpg') }}" class="about-banner-header__image"
                alt="Vijay Architects about banner">
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
        <section class="services about-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-title">Our <span>Services</span></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="items about-service-item mb-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="con about-service-card">
                                <div class="img about-service-card__media">
                                    <img src="{{ asset('assets/frontend/img/services/Architecture/Main Icon.jpg') }}"
                                        alt="Architecture">
                                </div>
                                <div class="info about-service-card__info">
                                    <h6>Architecture</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="items about-service-item mb-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="con about-service-card">
                                <div class="img about-service-card__media">
                                    <img src="{{ asset('assets/frontend/img/services/Interior Design/Main Icon.jpg') }}"
                                        alt="Interior Design">
                                </div>
                                <div class="info about-service-card__info">
                                    <h6>Interior Design</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="items about-service-item mb-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="con about-service-card">
                                <div class="img about-service-card__media">
                                    <img src="{{ asset('assets/frontend/img/services/Public Projects/Main Icon.jpg') }}"
                                        alt="Public Projects">
                                </div>
                                <div class="info about-service-card__info">
                                    <h6>Public Projects</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class="team mt-5">
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
