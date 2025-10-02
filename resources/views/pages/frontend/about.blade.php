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
        <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('assets/frontend/img/slider/2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-60">
                        <div class="subtitle">About Us</div>
                        <div class="title">ArchSan <span>Architecture</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About -->
        <section class="about mt-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">About</div>
                    </div>
                    <div class="col-lg-4 col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title">ArchSan <span>About</span></div>
                        <p>Architecture viverra tristique justo duis vitae iaminte neque nivamus aestan ateuene artines
                            aringianu the ateliten finibus viverra nec lacus in the nedana mis erodino setlie suscipe no
                            curabit tristue.</p>
                        <p>Design nila iman the finise viverra nec a lacus themo the seneoice misuscipit non sagie the
                            fermen.</p>
                        <p>Planner inilla duiman at elit finibus viverra nec a acus themo the drudea seneoice misuscipit
                            nonie the fermen miverra the ivite dianne onen nivam.</p>
                        <div class="states">
                            <ul class="flex">
                                <li class="flex">
                                    <div class="numb valign">
                                        <h1>24</h1>
                                    </div>
                                    <div class="text valign">
                                        <p>Years
                                            <br> Of Experience
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="wrap">
                            <div class="con"> <img src="{{ asset('assets/frontend/img/about.jpg') }}" class="img-fluid" alt="">
                                <div class="info">
                                    <h4 class="name">Stella Athena</h4>
                                </div>
                            </div>
                        </div>
                        <div class="wrap">
                            <div class="con"> <img src="{{ asset('assets/frontend/img/about2.jpg') }}" class="img-fluid" alt="">
                                <div class="info">
                                    <h4 class="name">Martin Dan</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Process -->
        <section class="process section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/img/slider/4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 valign animate-box" data-animate-effect="fadeInRight">
                        <div class="wrap">
                            <div class="number">
                                <h1>01</h1>
                            </div>
                            <div class="cont">
                                <h3>Concept Design</h3>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene
                                    artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino
                                    setlie suscipe no curabit tristique.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 order2 valign animate-box" data-animate-effect="fadeInLeft">
                        <div class="wrap">
                            <div class="number">
                                <h1>02</h1>
                            </div>
                            <div class="cont">
                                <h3>Preliminary Plans & Pricing</h3>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene
                                    artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino
                                    setlie suscipe no curabit tristique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order1 animate-box" data-animate-effect="fadeInRight">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/img/slider/3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <div class="img left">
                            <img src="{{ asset('assets/frontend/img/slider/2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 valign animate-box" data-animate-effect="fadeInRight">
                        <div class="wrap">
                            <div class="number">
                                <h1>03</h1>
                            </div>
                            <div class="cont">
                                <h3>Working Drawings & Consents</h3>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene
                                    artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino
                                    setlie suscipe no curabit tristique.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 order2 valign animate-box" data-animate-effect="fadeInLeft">
                        <div class="wrap">
                            <div class="number">
                                <h1>04</h1>
                            </div>
                            <div class="cont">
                                <h3>Chosing Your Builder</h3>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene
                                    artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino
                                    setlie suscipe no curabit tristique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order1 animate-box" data-animate-effect="fadeInRight">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/img/slider/1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team -->
        <section class="team">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="sub-title border-bot-light">FAQ</div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title">Frequently <span>Asked Questions</span></div>
                        <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines
                            ariianu the ateliten finibus viverra nec lacus in the nedana mis erodino.</p>
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
        <!-- Lets-Talk -->
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
