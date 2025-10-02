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
                <div class="text-left item bg-img" data-overlay-dark="4"
                    data-background="{{ asset('assets/frontend/img/slider/1.jpg') }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <h4>Project P.01</h4>
                                    <h1>Ultra-Modern House Design</h1>
                                    <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan
                                        ateuene artine aringianu the miss finibus viverra lacus fermen.</p>
                                    <a href="project-page.html" class="button-light">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-left item bg-img" data-overlay-dark="3"
                    data-background="{{ asset('assets/frontend/img/slider/2.jpg') }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <h4>Project P.02</h4>
                                    <h1>Ultra-Luxurious Villa</h1>
                                    <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan
                                        ateuene artine aringianu the miss finibus viverra lacus fermen.</p>
                                    <a href="project-page.html" class="button-light">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-left item bg-img" data-overlay-dark="4"
                    data-background="{{ asset('assets/frontend/img/slider/3.jpg') }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <h4>Project P.03</h4>
                                    <h1>Modernity In The Nature</h1>
                                    <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan
                                        ateuene artine aringianu the miss finibus viverra lacus fermen.</p>
                                    <a href="project-page.html" class="button-light">View Project</a>
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
                        <div class="section-title"><span>About</span> ArchSan</div>
                        <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines
                            aringianu the ateliten finibus viverra nec in the nedana. Design nila iman the finise
                            viverra nec a lacus themo the seneoice misuscipit drana miss non sagie the fermen.</p>
                        <p>Planner inilla duiman at elit finibus viverra a lacus themo the drudea seneoice misuscipit
                            nonie the fermen miverration tristique jusio the ivite dianne onen nivami acsestion augue
                            artine.</p><br>
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
                        <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines
                            ariianu the ateliten finibus viverra nec lacus in the nedana mis erodino. Design nila iman
                            the finise viverra nec a lacus miss viventa in the setlien suscipe no curabit tristue the
                            seneoice misuscipit non sagie the fermen.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
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
                                        <img src="{{ asset('assets/frontend/img/projects/08.jpg') }}" alt="">
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
                                        <img src="{{ asset('assets/frontend/img/projects/09.jpg') }}" alt="">
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
        <!-- Testiominals -->
        <section class="testimonials">
            <div class="background bg-img bg-fixed section-padding" data-background="{{ asset('assets/frontend/img/slider/4.jpg') }}"
                data-overlay-dark="6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-30">
                            <h3 class="sub-title border-bot-dark">Testiominals</h3>
                        </div>
                        <div class="col-md-8">
                            <div class="section-title">What Client's Say?</div>
                            <div class="wrap">
                                <div class="owl-carousel owl-theme">
                                    <div class="item"> <span class="quote"><img src="{{ asset('assets/frontend/img/quot.png') }}"
                                                alt=""></span>
                                        <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan
                                            ateuene artines aringianu the ateliten finibus viverra nec lacus. Nedana
                                            theme erodino setlie suscipe no curabit tristique. Design nila iman the
                                            finise viverra nec a lacus themo the seneoice misuscipit non sagie the
                                            fermen.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="{{ asset('assets/frontend/img/team/1.jpg') }}" alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>Jason Brown</h6> <span>Crowne Plaza Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan
                                            ateuene artines aringianu the ateliten finibus viverra nec lacus. Nedana
                                            theme erodino setlie suscipe no curabit tristique. Design nila iman the
                                            finise viverra nec a lacus themo the seneoice misuscipit non sagie the
                                            fermen.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="{{ asset('assets/frontend/img/team/2.jpg') }}" alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>Emily White</h6> <span>Armada Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan
                                            ateuene artines aringianu the ateliten finibus viverra nec lacus. Nedana
                                            theme erodino setlie suscipe no curabit tristique. Design nila iman the
                                            finise viverra nec a lacus themo the seneoice misuscipit non sagie the
                                            fermen.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="{{ asset('assets/frontend/img/team/4.jpg') }}" alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>Jesica Smith</h6> <span>Alsa Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog -->
        <section class="blog-home section-padding">
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
                                    <div class="img"> <img src="{{ asset('assets/frontend/img/blog/1.jpg') }}" alt=""> </div>
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
                                    <div class="img"> <img src="{{ asset('assets/frontend/img/blog/2.jpg') }}" alt=""> </div>
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
                                    <div class="img"> <img src="{{ asset('assets/frontend/img/blog/3.jpg') }}" alt=""> </div>
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
        </section>

        <section class="blog-home">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="sub-title border-bot-light">FAQ</div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title"><span>Frequently</span> Asked Questions</div>

                    </div>
                </div>

                <div class="row mb-5 animate-box" data-animate-effect="fadeInUp">
                    <div class="col-md-12">
                        <ul class="accordion-box clearfix">
                            <li class="accordion block">
                                <div class="acc-btn">Modern Architectural Structures</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Architecture viverra tristique justo duis vitae diam
                                            neque nivamus aestan ateuene artines aringianu atelit finibus
                                            viverra nec lacus. Nedana theme erodino setlie suscipe no tristique.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">Modern Building Structures</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Architecture viverra tristique justo duis vitae diam
                                            neque nivamus aestan ateuene artines aringianu atelit finibus
                                            viverra nec lacus. Nedana theme erodino setlie suscipe no tristique.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">Modern Design Structures</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Architecture viverra tristique justo duis vitae diam
                                            neque nivamus aestan ateuene artines aringianu atelit finibus
                                            viverra nec lacus. Nedana theme erodino setlie suscipe no tristique.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">Modern Urban Structures</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Architecture viverra tristique justo duis vitae diam
                                            neque nivamus aestan ateuene artines aringianu atelit finibus
                                            viverra nec lacus. Nedana theme erodino setlie suscipe no tristique.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">Modern Interior Structures</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Architecture viverra tristique justo duis vitae diam
                                            neque nivamus aestan ateuene artines aringianu atelit finibus
                                            viverra nec lacus. Nedana theme erodino setlie suscipe no tristique.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Lets Talk -->
        <section class="lets-talk">
            <div class="background bg-img bg-fixed section-padding" data-background="{{ asset('assets/frontend/img/slider/1.jpg') }}"
                data-overlay-dark="6">
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
