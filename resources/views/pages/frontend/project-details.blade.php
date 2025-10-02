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
                        <div class="subtitle"><a href="projects.html">Projects</a></div>
                        <div class="title">Ultra-Modern House Design</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Page  -->
        <section class="project-page section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Nam rhoncus euismod eros. Integer fringilla varius leo, eget volutpat eros convalist. Nulla
                            non nisl orci. Donec ornare ullamcorper nunc elementum placerat urabitur massa ante, iaculis
                            a enim porta, iaculis. Quisque gravida eros ut turpis interdum ornare. Interdum et malesu
                            they adamale fames ac ante ipsum primis in faucibus curabitur arcu erosite feugiat in tortor
                            in, volutpat sollicitudin libero maecenas nisl est conselur rhoncus loremir consequat et,
                            finibus nec purus.</p><br>
                    </div>
                </div>
                <!-- project slider -->
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="portfolio-item"> <img class="img-fluid" src="{{ asset('assets/frontend/img/slider/4.jpg') }}"
                                    alt=""> </div>
                            <div class="portfolio-item"> <img class="img-fluid" src="{{ asset('assets/frontend/img/slider/5.jpg') }}"
                                    alt=""> </div>
                            <div class="portfolio-item"> <img class="img-fluid" src="{{ asset('assets/frontend/img/slider/6.jpg') }}"
                                    alt=""> </div>
                            <div class="portfolio-item"> <img class="img-fluid" src="{{ asset('assets/frontend/img/slider/7.jpg') }}"
                                    alt=""> </div>
                            <div class="portfolio-item"> <img class="img-fluid" src="{{ asset('assets/frontend/img/slider/8.jpg') }}"
                                    alt=""> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="project-bar">
                                    <div class="row justify-content-between align-items-center text-left text-lg-start">
                                        <div class="col-md-3 mb-15">
                                            <h5>Year</h5>
                                            <h6>2020 - 2025</h6>
                                        </div>
                                        <div class="col-md-3 mb-15">
                                            <h5>Company</h5>
                                            <h6>Drana Inc.</h6>
                                        </div>
                                        <div class="col-md-3 mb-15">
                                            <h5>Name</h5>
                                            <h6>House Design</h6>
                                        </div>
                                        <div class="col-md-3 mb-15">
                                            <h5>Location</h5>
                                            <h6>New York, USA</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Nam rhoncus euismod eros. Integer fringilla varius leo, eget volutpat eros convalist. Nulla
                            non nisl orci. Donec ornare ullamcorper nunc elementum placerat urabitur massa ante, iaculis
                            a enim porta, iaculis. Quisque gravida eros ut turpis interdum ornare. Interdum et malesu
                            they adamale fames ac ante ipsum primis in faucibus curabitur arcu erosite feugiat in tortor
                            in, volutpat sollicitudin libero maecenas nisl est conselur rhoncus loremir consequat et,
                            finibus nec purus.</p>
                        <p>Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante
                            ipsum primis in faucibus. Curabitur arcu erosite feugiat in tortor in, volutpat sollicitudin
                            libero. Maecenas nisl est, conselur rhoncus loremir consequat et, finibus nec purus. Mauris
                            urna libero, tincidunt non ligula aliquam, maximus dignissim lacus. Fusce ac neque nibh.
                            Fusce pretium enim vel mi fringilla euismod. Suspendisse dapibus nec nisl a hendrerit.</p>
                        <br>
                        <ul class="list-unstyled page-list mb-30">
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>Over 15 years of experience</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>200+ successfully executed projects</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>Exceptional work quality</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Other Projects -->
        <section class="projects section-padding">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="sub-title border-bot-light">Discover</div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title"><span>Other</span> Projects</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/07.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.01</span>
                                        <h6><a href="project-page.html">Intermediate Hall</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/12.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.02</span>
                                        <h6><a href="project-page.html">Modern Loft Kitchen</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/10.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.03</span>
                                        <h6><a href="project-page.html">Unique Stair Designs</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/11.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.04</span>
                                        <h6><a href="project-page.html">Best Kitchen Design</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/8.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.05</span>
                                        <h6><a href="project-page.html">Farm House Bedroom</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/9.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.06</span>
                                        <h6><a href="project-page.html">Lighting At Home</a></h6>
                                    </div>
                                </div>
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
                                        <input class="line-gray" name="name" type="text"
                                            placeholder="Full Name *" required="">
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
