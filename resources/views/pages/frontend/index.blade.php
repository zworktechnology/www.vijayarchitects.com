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

        <!-- Slider -->
        <header id="slider-area" class="header slider-fade">
            <div class="owl-carousel owl-theme">
                <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
                <div class="text-left item bg-img" data-overlay-dark="1"
                    data-background="{{ asset('assets/frontend/img/slider/1.jpg') }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <h4>01</h4>
                                    <h1>The Signature of Luxury Living</h1>
                                    <p>From contemporary villas to iconic commercial spaces — we design environments
                                        that speak sophistication and comfort in every detail.</p>
                                    <a href="{{ route('contact') }}" class="button-light">Contact Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-left item bg-img" data-overlay-dark="2"
                    data-background="{{ asset('assets/frontend/img/slider/2.jpg') }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <h4>02</h4>
                                    <h1>Crafting Landmarks, Not Just Buildings</h1>
                                    <p>At Vijay Architects, every line we draw becomes a symbol of elegance — redefining
                                        Trichy’s skyline with timeless architectural mastery.

                                    </p>
                                    <a href="{{ route('contact') }}" class="button-light">Contact Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-left item bg-img" data-overlay-dark="3"
                    data-background="{{ asset('assets/frontend/img/slider/3.jpg') }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <h4>03</h4>
                                    <h1>Redefining Modern Architecture in Tamil Nadu
                                    </h1>
                                    <p> Where design meets precision, and imagination shapes reality — creating spaces
                                        that inspire awe and admiration.
                                    </p>
                                    <a href="{{ route('contact') }}" class="button-light">Contact Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-left item bg-img" data-overlay-dark="4"
                    data-background="{{ asset('assets/frontend/img/slider/2.jpg') }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <h4>04</h4>
                                    <h1>Crafting Landmarks, Not Just Buildings</h1>
                                    <p>At Vijay Architects, every line we draw becomes a symbol of elegance — redefining
                                        Trichy’s skyline with timeless architectural mastery.

                                    </p>
                                    <a href="{{ route('contact') }}" class="button-light">Contact Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-num" id="snh-1"></div>
            <div class="slider__progress"><span></span></div>
        </header>

        <!-- About -->
        <section class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">Who are we?</div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title"><span>About</span> VIJAY ARCHITECTS</div>
                        <p>At Vijay Architects, we believe architecture is more than design — it’s the art of giving form
                            to imagination. Based in Trichy, Tamil Nadu, our award-winning team of architects and
                            designers specialize in creating luxurious residences, contemporary commercial spaces, and
                            sustainable developments that redefine modern living.</p>
                        <p>Every project we design reflects a fusion of functionality, aesthetics, and cultural essence,
                            crafted with precision to deliver timeless elegance. From initial concept to final detail,
                            we ensure your vision transforms into a masterpiece that stands as a landmark.</p><br>
                        <div class="row">
                            <div class="col col-md-4">
                                <div class="about-box">
                                    <img src="{{ asset('assets/frontend/img/icon-1.png') }}" class="icon"
                                        alt="">
                                    <h5>Architecture</h5>
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="about-box">
                                    <img src="{{ asset('assets/frontend/img/icon-2.png') }}" class="icon"
                                        alt="">
                                    <h5>Interior</h5>
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="about-box">
                                    <img src="{{ asset('assets/frontend/img/icon-3.png') }}" class="icon"
                                        alt="">
                                    <h5>Planing</h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!-- Projects -->
        <section class="projects section-padding">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">Discover</div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title"><span>Creative</span> Projects</div>
                        <p>Each project at Vijay Architects tells a story of creativity and craftsmanship. From
                            ultra-luxury villas in Trichy to innovative commercial spaces across Tamil Nadu, we redefine
                            what modern architecture can achieve. Explore our curated portfolio — a celebration of
                            refined design, innovative materials, and enduring beauty that inspires both emotion and
                            admiration.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <div class="owl-carousel owl-theme">
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/05.jpg') }}"
                                            alt="" style="height: 400px">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.01</span>
                                        <h6><a href="project-page.html">ARULMANI RESIDENCE</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/03.JPG') }}"
                                            alt="" style="height: 400px">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.01</span>
                                        <h6><a href="project-page.html">ARULMANI RESIDENCE</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/07.jpg') }}"
                                            alt="" style="height: 400px">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.01</span>
                                        <h6><a href="project-page.html">ARULMANI RESIDENCE</a></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog -->
        {{-- <section class="blog-home section-padding">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="sub-title border-bot-light">Blog</div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title"><span>Latest</span> News</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <div class="post-img">
                                <a href="post.html">
                                    <div class="img"> <img src="{{ asset('assets/frontend/img/blog/1.jpg') }}"
                                            alt=""> </div>
                                </a>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">5 Best Villa ideas in 2025</a></h4>
                                <div class="info"> <a href="blog.html"><span>Exterior Design</span></a> <a
                                        href="blog.html">Dec, 24</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <div class="post-img">
                                <a href="post.html">
                                    <div class="img"> <img src="{{ asset('assets/frontend/img/blog/2.jpg') }}"
                                            alt=""> </div>
                                </a>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">Luxury kitchen ideas</a></h4>
                                <div class="info"> <a href="blog.html"><span>Interior Design</span></a> <a
                                        href="blog.html">Dec, 21</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <div class="post-img">
                                <a href="post.html">
                                    <div class="img"> <img src="{{ asset('assets/frontend/img/blog/3.jpg') }}"
                                            alt=""> </div>
                                </a>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">Home Decorating Inspiration</a></h4>
                                <div class="info"> <a href="blog.html"><span>Interior Design</span></a> <a
                                        href="blog.html">Dec, 18</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

      @include('pages.frontend.layouts.cta')

    </div>

    @include('pages.frontend.layouts.footer')

    @include('pages.frontend.layouts.script')

</body>

</html>
