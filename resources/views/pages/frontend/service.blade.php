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
            data-background="{{ asset('assets/frontend/img/slider/2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-60">
                        <div class="subtitle">What We Do</div>
                        <div class="title">Our Services</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services -->
        <section class="services section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-5 animate-box" data-animate-effect="fadeInUp">
                        <div class="item bg-1">
                            <div class="con">
                                <a href="services-page.html">
                                    <div class="numb">01</div>
                                    <h5>Architecture</h5>
                                    <p>We craft spaces that inspire — blending modern design, structural precision, and
                                        timeless aesthetics to create iconic residential and commercial landmarks.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 animate-box" data-animate-effect="fadeInUp">
                        <div class="item bg-2">
                            <div class="con">
                                <a href="services-page.html">
                                    <div class="numb">02</div>
                                    <h5>Interior Design</h5>
                                    <p>From concept to finishing touches, our interiors reflect your personality —
                                        merging elegance, functionality, and luxury in every corner.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 animate-box" data-animate-effect="fadeInUp">
                        <div class="item bg-3">
                            <div class="con">
                                <a href="services-page.html">
                                    <div class="numb">03</div>
                                    <h5>Urban Design</h5>
                                    <p>We shape vibrant urban environments through thoughtful planning, sustainable
                                        layouts, and human-centered architectural vision.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 animate-box" data-animate-effect="fadeInUp">
                        <div class="item bg-4">
                            <div class="con">
                                <a href="services-page.html">
                                    <div class="numb">04</div>
                                    <h5>Planing</h5>
                                    <p>Every great design begins with a master plan. We deliver detailed, efficient, and
                                        future-ready planning that maximizes your site’s potential.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 animate-box" data-animate-effect="fadeInUp">
                        <div class="item bg-5">
                            <div class="con">
                                <a href="services-page.html">
                                    <div class="numb">05</div>
                                    <h5>3D Modelling</h5>
                                    <p>Experience your project before it’s built — with immersive 3D visualizations that
                                        bring architectural ideas to life in stunning detail.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 animate-box" data-animate-effect="fadeInUp">
                        <div class="item bg-6">
                            <div class="con">
                                <a href="services-page.html">
                                    <div class="numb">06</div>
                                    <h5>Decor Plans</h5>
                                    <p>Our décor concepts elevate every space with curated textures, tones, and
                                        materials — ensuring harmony between design and lifestyle</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Lets Talk -->
        <section class="lets-talk">
            <div class="background bg-img bg-fixed section-padding"
                data-background="{{ asset('assets/frontend/img/slider/1.jpg') }}" data-overlay-dark="6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-30">
                            <div class="sub-title border-bot-dark">Contact Us</div>
                        </div>
                        <div class="col-md-8">
                            <div class="section-title">Let's discuss your project</div>
                            <p>Fill out the form and our manager will contact you for consultation.</p>
                            <form method="post" class="contact__form" action="mail.php">
                                <!-- Form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none"
                                            role="alert"> Your message was sent successfully. </div>
                                    </div>
                                </div>
                                <!-- Form elements -->
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input class="line-gray" name="name" type="text" placeholder="Full Name *"
                                            required="">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input class="line-gray" name="phone" type="text" placeholder="Phone *"
                                            required="">
                                    </div>
                                    <div class="col-md-2">
                                        <input class="line-gray" name="submit" type="submit" value="Send">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <input type="checkbox" class="line-gray">
                                        <label>I agree with the <a href="#0" class="underline line-gray">privacy
                                                policy</a></label>
                                    </div>
                                </div>
                            </form>
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
