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
            data-background="{{ asset('assets/frontend/img/slider/1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-60">
                        <div class="subtitle"><a href="blog.html">Blog</a></div>
                        <div class="title">Modern Architectural Structures</div>
                        <div class="wrap">
                            <div class="author"> <img src="{{ asset('assets/frontend/img/team/1.jpg') }}" alt=""
                                    class="avatar"> Emma Emily</div>
                            <div class="date-comment"> <i class="ti-calendar"></i> 30 Dec 2025 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog -->
        <section class="blog ">
            <div class="container">
                <div class="row">
                    <!-- content -->
                    <div class="col-lg-8 col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <!-- Post  -->
                        <section class="post  section-padding">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                                        <img src="{{ asset('assets/frontend/img/slider/6.jpg') }}"
                                            class="img-responsive mb-5" alt="">
                                        <div class="date"> <span class="ti-time"></span> 15.11.2025 <span
                                                class="ti-tag"></span> Architecture </div>
                                        <h2>Modern Architectural Structures</h2>
                                        <p>Nam rhoncus euismod eros. Integer fringilla varius leo, eget volutpat eros
                                            convalist. Nulla non nisl orci. Donec ornare ullamcorper nunc elementum
                                            placerat urabitur massa ante, iaculis a enim porta, iaculis. Quisque gravida
                                            eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac
                                            ante ipsum primis in faucibus curabitur arcu erosite feugiat in tortor in,
                                            volutpat sollicitudin libero maecenas nisl est conselur rhoncus loremir
                                            consequat et, finibus nec purus.</p>
                                        <p>Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they
                                            adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite
                                            feugiat in tortor in, volutpat sollicitudin libero. Maecenas nisl est,
                                            conselur rhoncus loremir consequat et, finibus nec purus. Mauris urna
                                            libero, tincidunt non ligula aliquam, maximus dignissim lacus. Fusce ac
                                            neque nibh. Fusce pretium enim vel mi fringilla euismod. Suspendisse dapibus
                                            nec nisl a hendrerit.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- sidebar -->
                    <div class="col-lg-4 col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <div class="sidebar">

                            <div class="widget category">
                                <h6 class="title-widget">Categories</h6>
                                <ul class="rest">
                                    <li> <span><a href="#">Architecture</a></span> <span class="ml-auto">10</span>
                                    </li>
                                    <li> <span><a href="#">Interior Design</a></span> <span
                                            class="ml-auto">05</span>
                                    </li>
                                    <li> <span><a href="#">Building</a></span> <span class="ml-auto">18</span>
                                    </li>
                                    <li> <span><a href="#">Graphic Design</a></span> <span
                                            class="ml-auto">12</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget last-post-thum">
                                <h6 class="title-widget">Latest Posts</h6>
                                <div class="item">
                                    <div class="valign">
                                        <div class="img">
                                            <a href="post.html"><img
                                                    src="{{ asset('assets/frontend/img/slider/9.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <h6><a href="post.html">Modern Architecture Buildings</a></h6> <span><a
                                                href="post.html">24 Dec 2025</a></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="valign">
                                        <div class="img">
                                            <a href="post.html"><img
                                                    src="{{ asset('assets/frontend/img/slider/1.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <h6><a href="post.html">Ultro House Designs</a></h6> <span><a
                                                href="post.html">18 Dec 2025</a></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="valign">
                                        <div class="img">
                                            <a href="post.html"><img
                                                    src="{{ asset('assets/frontend/img/slider/10.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <h6><a href="post.html">Modernism In Architecture</a></h6> <span><a
                                                href="post.html">15 Dec 2025</a></span>
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
