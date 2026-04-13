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
        <div class="banner-header about-banner-header" data-overlay-dark="4">
            <img src="{{ asset('assets/frontend/img/about_banner.jpg') }}" class="about-banner-header__image"
                alt="Vijay Architects contactus banner">
        </div>

        <!-- Contact -->
        <div class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Contact Info -->
                        <h4 class="mb-4">Vijay <span>Architects</span></h4>
                        <p>Vijay Architects,
                            No. 14, Alexandria Road,<br>
                            Cantonment,
                            Trichy -620001</p>
                        <a href="tel:+919171711513" class="phone">9171711513, 8903493280.</a>
                        <a href="mailto:vijayarchitects@hotmail.com" class="mail mb-3">vijayarchitects@hotmail.com</a>
                        <div class="social mt-2">

                            <a href="https://www.instagram.com/vijayarchitects?igsh=bWV2ZDJ1endnaDc3" target="_blank"><i
                                    class="ti-instagram"></i></a>
                            <a href="https://www.facebook.com/share/1CMP1sZigT/" target="_blank"><i
                                    class="ti-facebook"></i></a>
                        </div>
                    </div>

                    <!-- form -->
                    <div class="col-lg-8 col-md-12">
                        <h4 class="mb-4">Have a Project? - <span>Lets Talk</span></h4>
                        <form method="post" class="contact__form" action="{{ route('contact.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully. </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-6 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required=""></textarea>
                                </div>
                                <div class="row align-items-start justify-content-between col-md-12 mt-2">
                                    <div class="col-md-6">
                                        <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"></div>
                                        <br>
                                        @error('cf-turnstile-response')
                                            <div class="alert alert-danger mt-1 mb-1"
                                                style="margin-top: 10px !important; color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-md-end">
                                        <input name="submit" type="submit" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Maps -->
        <div class="google-maps">
            <iframe id="gmap_canvas"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3587.4094242759998!2d78.68060361012749!3d10.803310658653817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf51c5a5da421%3A0xd3f525c52f26be8d!2sVIJAY%20ARCHITECTS!5e1!3m2!1sen!2smy!4v1760504354556!5m2!1sen!2smy"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>

    @include('pages.frontend.layouts.footer')

    @include('pages.frontend.layouts.script')
</body>

</html>
