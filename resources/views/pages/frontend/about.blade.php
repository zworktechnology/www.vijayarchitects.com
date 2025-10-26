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
            data-background="{{ asset('assets/frontend/img/SIVAGAMIARKNAGAR.jpg') }}" style="background-position: top top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-60">
                        <div class="subtitle">About Us</div>
                        <div class="title">VIJAY <span>ARCHITECTS</span></div>
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
                        <div class="section-title">VIJAY <span>ARCHITECTS</span></div>
                        <p>At Vijay Architect, we believe architecture is more than design — it’s the art of giving form
                            to imagination. Based in Trichy, Tamil Nadu, our award-winning team of architects and
                            designers specialize in creating luxurious residences, contemporary commercial spaces, and
                            sustainable developments that redefine modern living. </p>

                        <p>Every project we design reflects a fusion of functionality, aesthetics, and cultural essence,
                            crafted with precision to deliver timeless elegance. From initial concept to final detail,
                            we ensure your vision transforms into a masterpiece that stands as a landmark.</p>
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
                            <div class="con"> <img src="{{ asset('assets/frontend/img/vijay.jpg') }}"
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
                                <p>Every great structure begins with a story.</p>
                                <p>At Vijay Architect, we start by understanding your vision, lifestyle, and site
                                    potential. Our architects in Trichy create initial concepts and sketches that
                                    capture your aspirations while blending aesthetics, function, and local context —
                                    the first step toward timeless architecture</p>
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
                                <p>Once the concept is refined, we move into space planning and feasibility. Detailed
                                    preliminary drawings help visualize the design flow, while transparent pricing
                                    ensures your project aligns with both budget and expectation. It’s how we bring
                                    clarity and confidence to every design decision.</p>
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
                                <p>Precision meets execution here.</p>
                                <p>Our team prepares complete architectural drawings, structural details, and technical
                                    documentation — ensuring smooth coordination with engineers, builders, and local
                                    authorities across Tamil Nadu. Every line drawn reflects accuracy, compliance, and
                                    creative brilliance</p>
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
                                <p>We help you connect with the right construction partner who understands both design
                                    integrity and premium quality. With our expert guidance, you can choose a builder
                                    who executes your dream home or commercial space exactly as envisioned — flawlessly
                                    and on time.
                                </p>
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

                    </div>
                </div>
                <div class="row mb-5 animate-box" data-animate-effect="fadeInUp">
                    <div class="col-md-6">
                        <ul class="accordion-box clearfix">
                            <li class="accordion block">
                                <div class="acc-btn">What makes Vijay Architect one of the best architects in Trichy?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Vijay Architect is known for combining creativity with
                                            precision. Our designs balance aesthetics, functionality, and sustainability
                                            — making us a preferred architecture firm in Trichy and across Tamil Nadu.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">What types of projects do you handle?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We specialize in residential villas, commercial buildings,
                                            institutional spaces, and interior design. From concept to completion, our
                                            team ensures every project reflects the client’s vision and lifestyle.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">Do you provide complete architecture and interior solutions?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Yes. We offer end-to-end services including architecture,
                                            interior design, 3D visualization, planning, and project supervision —
                                            ensuring consistency and quality throughout.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">How do I start my project with Vijay Architect?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">You can contact us through our website or visit our Trichy
                                            office. We begin with an initial consultation to understand your needs,
                                            site, and budget before starting the design process.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">Do you provide architectural services outside Trichy?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Absolutely. While we’re based in Trichy, our projects
                                            extend across Tamil Nadu — including Madurai, Coimbatore, Salem, Karur, and
                                            Chennai.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">How long does it take to design a home or commercial space?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">The timeline depends on project size and complexity.
                                            Typically, design and planning take 4–8 weeks, followed by execution support
                                            based on your schedule.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">Can you design according to Vastu principles?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Yes. Our architects are experienced in Vastu-compliant
                                            design, ensuring harmony, energy balance, and comfort without compromising
                                            aesthetics.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="accordion-box clearfix">

                            <li class="accordion block">
                                <div class="acc-btn">What is the cost of architectural design in Trichy?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Design costs vary based on project scale and requirements.
                                            We provide customized quotations after the initial consultation to match
                                            your vision and budget.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">Do you offer 3D design and visualization services?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Yes, we provide high-quality 3D renderings and walkthroughs
                                            so you can visualize your dream home before construction begins.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">How involved will I be during the design process?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">You’ll be an integral part of the journey. We involve
                                            clients at every stage — from concept sketches to material selection —
                                            ensuring the outcome reflects your personality.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">Can you work with builders or contractors of our choice?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Yes. We collaborate smoothly with client-appointed
                                            contractors to ensure that our designs are executed with accuracy and
                                            quality.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">Do you provide site supervision or only design services?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We offer both. Our architects can monitor site execution to
                                            maintain design integrity and ensure timely completion.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">What makes your designs stand out from others in Tamil Nadu?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Our signature lies in luxury, precision, and innovation.
                                            Each design is customized — blending local culture, modern aesthetics, and
                                            sustainable practices to create timeless spaces.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">How can I contact Vijay Architect for consultation?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">You can reach us via our website contact form, phone, or
                                            visit our Trichy office. Our team will schedule a detailed consultation to
                                            discuss your dream project.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testiominals -->
        <section class="testimonials">
            <div class="background bg-img bg-fixed section-padding"
                data-background="{{ asset('assets/frontend/img/4.jpg') }}" data-overlay-dark="6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-30">
                            <h3 class="sub-title border-bot-dark">Testiominals</h3>
                        </div>
                        <div class="col-md-8">
                            <div class="section-title">What Client's Say?</div>
                            <div class="wrap">
                                <div class="owl-carousel owl-theme">
                                    <div class="item"> <span class="quote"><img
                                                src="{{ asset('assets/frontend/img/quot.png') }}"
                                                alt=""></span>
                                        <p>Vijay Architects transformed our Trichy plot into a stunning villa. Every
                                            space reflects luxury and warmth — they truly are the best architects in
                                            Trichy.</p>
                                        <div class="info">
                                            <div class="author-img"> <img
                                                    src="{{ asset('assets/frontend/img/team/1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>Aravind Raman</h6> <span>Cantonment Trichy
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>We wanted a blend of modern and traditional design for our family home. Vijay
                                            Architects understood our vision perfectly and delivered beyond
                                            expectations.
                                        </p>
                                        <div class="info">
                                            <div class="author-img"> <img
                                                    src="{{ asset('assets/frontend/img/team/2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>Mrs. Priya S</h6> <span>Woraiyur Trichy</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>Our commercial building in Karur stands out because of their elegant façade
                                            and efficient layout. Vijay Architect’s design sense is world-class.</p>
                                        <div class="info">
                                            <div class="author-img"> <img
                                                    src="{{ asset('assets/frontend/img/team/4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>S. Naveen Kumar</h6> <span>Karur</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>From the first concept to final handover, the experience was seamless. The
                                            team’s professionalism and creativity make them one of Tamil Nadu’s top
                                            architecture firms.</p>
                                        <div class="info">
                                            <div class="author-img"> <img
                                                    src="{{ asset('assets/frontend/img/team/4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>Meenakshi Raj</h6> <span>Madurai</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>We built our dream villa near Srirangam, and the detailing left us
                                            speechless. Every corner reflects thoughtful planning and premium finish</p>
                                        <div class="info">
                                            <div class="author-img"> <img
                                                    src="{{ asset('assets/frontend/img/team/4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>Dr. Karthik Balaji</h6> <span>Srirangam</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>Their 3D visualizations helped us see our future home clearly. The final
                                            outcome matched it perfectly — pure architectural brilliance.</p>
                                        <div class="info">
                                            <div class="author-img"> <img
                                                    src="{{ asset('assets/frontend/img/team/4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>Mr. Vignesh & Family</h6> <span>Tiruchirappalli</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>Our boutique resort project in Kodaikanal came alive because of their
                                            sustainable yet luxurious design approach. Highly recommend Vijay
                                            Architects.
                                        </p>
                                        <div class="info">
                                            <div class="author-img"> <img
                                                    src="{{ asset('assets/frontend/img/team/4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>R. Divya Menon</h6> <span>Kodaikanal</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>What I loved most was their balance between aesthetics and practicality. Our
                                            home in Namakkal feels spacious, elegant, and timeless.
                                        </p>
                                        <div class="info">
                                            <div class="author-img"> <img
                                                    src="{{ asset('assets/frontend/img/team/4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>Mohan Krishnan</h6> <span>Namakkal</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>We hired Vijay Architects for our office interiors in Trichy. The design
                                            boosts productivity while maintaining a premium corporate feel.
                                        </p>
                                        <div class="info">
                                            <div class="author-img"> <img
                                                    src="{{ asset('assets/frontend/img/team/4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont">
                                                <h6>Harish Sundar</h6> <span>Thillai Nagar Trichy</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="{{ asset('assets/frontend/img/quot.png') }}" alt="">
                                        </span>
                                        <p>Vijay Architect’s designs are more than beautiful — they’re intelligent.
                                            Every inch of space in our house is used efficiently without losing luxury.

                                        </p>
                                        <div class="info">
                                            <div class="author-img"> <img
                                                    src="{{ asset('assets/frontend/img/team/4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont">
                                                <h6> Mrs. Anitha Vel</h6> <span>Coimbatore</span>
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

    </div>

    @include('pages.frontend.layouts.footer')

    @include('pages.frontend.layouts.script')
</body>

</html>
