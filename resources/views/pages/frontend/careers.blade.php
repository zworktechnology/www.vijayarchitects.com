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

        <section class="about">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12 animate-box" data-animate-effect="fadeInUp">

                        <div class="careers-content mt-4">

                            <h2 class="careers-heading">Internships</h2>
                            <p class="careers-text">
                                We offer internship to students of architecture, interested in exploring possibilities in
                            </p>
                            <ul class="careers-list">
                                <li>Sustainable practice</li>
                                <li>Urban / public projects.</li>
                                <li>Residential and campus architecture.</li>
                            </ul>

                            <h2 class="careers-heading mt-5">Job opportunities</h2>
                            <h3 class="careers-subheading">We are hiring</h3>
                            <p class="careers-text">
                                We are looking for architects who are passionate about exploring possibilities in architecture. Responsibilities include designing, co-ordination with clients /consultants/ construction team, in all stages of the project from designing to construction to finishes.
                            </p>
                            <p class="careers-text">
                                Proficiency in softwares would be an additional asset.
                            </p>

                            <p class="careers-text mt-4">
                                Send your portfolio to <a href="mailto:vijayarchitects@hotmail.com" class="careers-email">vijayarchitects@hotmail.com</a>.
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    @include('pages.frontend.layouts.footer')

    @include('pages.frontend.layouts.script')

</body>

</html>
