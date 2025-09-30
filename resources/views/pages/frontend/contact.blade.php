<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kannaas & CO </title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('pages.frontend.layouts.metaog')

    @include('pages.frontend.layouts.headerstyle')

    @turnstileScripts()
</head>

<body>

    @include('pages.frontend.layouts.preloader')

    @include('pages.frontend.layouts.header')

    <main>

        <!-- beadcrumb area start -->
        <div class="tp-breadcrumb__ptb tp-breadcrumb__bg p-relative z-index-1 fix"
            data-background="{{ asset('assets/frontend/img/breadcrumb/breadcrumb-4.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="tp-breadcrumb__content p-relative">
                            <h3 class="tp-breadcrumb__title white">Contact us</h3>
                            <div class="tp-breadcrumb__list white">
                                <span><a href="{{ route('index') }}">Home</a></span>
                                <span> / </span>
                                <span>Contact us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- beadcrumb area end -->

        <!-- contact area start -->
        <section class="tp-contact-breadcrumb-ptb pt-130 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-contact-map-box wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="tp-contact-map-content">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m16!1m11!1m3!1d162.47735786964464!2d78.66462295022322!3d10.787925059035317!2m2!1f0!2f45!3m2!1i1024!2i768!4f35!3m2!1m1!2zMTDCsDQ3JzIxLjQiTiA3OMKwMzknNTIuOCJF!5e1!3m2!1sen!2sin!4v1743688801602!5m2!1sen!2sin"
                                    width="558" height="520" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-md-0 mt-4">
                        <div class="tp-contact-wrap pl-90 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="tp-contact-heading mb-60">
                                <span class="tp-contact-title-pre">FEEL FREE TO
                                    CONTACT US</span>
                                <h4 class="tp-contact-section-title">We would love to
                                    hear
                                    <br>
                                    form you!
                                </h4>
                            </div>
                            <div class="tp-contact-wrap">
                                <div class="tp-contact-wrap-info d-flex align-items-center">
                                    <div class="tp-contact-wrap-info-icon">
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.62 8.75033C15.19 8.75033 14.85 8.40033 14.85 7.98033C14.85 7.61033 14.48 6.84034 13.86 6.17034C13.25 5.52034 12.58 5.14034 12.02 5.14034C11.59 5.14034 11.25 4.79034 11.25 4.37034C11.25 3.95034 11.6 3.60034 12.02 3.60034C13.02 3.60034 14.07 4.14034 14.99 5.11034C15.85 6.02034 16.4 7.15034 16.4 7.97033C16.4 8.40033 16.05 8.75033 15.62 8.75033Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M19.2278 8.74998C18.7978 8.74998 18.4578 8.39998 18.4578 7.97998C18.4578 4.42999 15.5678 1.55 12.0278 1.55C11.5978 1.55 11.2578 1.2 11.2578 0.779998C11.2578 0.359999 11.5978 0 12.0178 0C16.4178 0 19.9978 3.57999 19.9978 7.97998C19.9978 8.39998 19.6478 8.74998 19.2278 8.74998Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M9.78998 12.21L6.51999 15.48C6.15999 15.16 5.80999 14.83 5.46999 14.49C4.43999 13.45 3.50999 12.36 2.67999 11.22C1.86 10.08 1.2 8.93998 0.719999 7.80999C0.24 6.66999 0 5.57999 0 4.53999C0 3.85999 0.12 3.20999 0.359999 2.60999C0.599999 2 0.979998 1.44 1.51 0.939998C2.15 0.309999 2.84999 0 3.58999 0C3.86999 0 4.14999 0.06 4.39999 0.18C4.65999 0.299999 4.88999 0.479999 5.06999 0.739999L7.38999 4.00999C7.56998 4.25999 7.69998 4.48999 7.78998 4.70999C7.87998 4.91999 7.92998 5.12999 7.92998 5.31999C7.92998 5.55999 7.85998 5.79999 7.71998 6.02999C7.58998 6.25999 7.39998 6.49999 7.15999 6.73999L6.39999 7.52998C6.28999 7.63998 6.23999 7.76999 6.23999 7.92998C6.23999 8.00998 6.24999 8.07998 6.26999 8.15998C6.29999 8.23998 6.32999 8.29998 6.34999 8.35998C6.52999 8.68998 6.83999 9.11998 7.27998 9.63998C7.72998 10.16 8.20998 10.69 8.72998 11.22C9.08998 11.57 9.43998 11.91 9.78998 12.21Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M19.9715 16.33C19.9715 16.61 19.9215 16.9 19.8215 17.18C19.7915 17.26 19.7615 17.34 19.7215 17.42C19.5515 17.78 19.3315 18.12 19.0415 18.44C18.5515 18.98 18.0115 19.37 17.4015 19.62C17.3915 19.62 17.3815 19.63 17.3715 19.63C16.7815 19.87 16.1415 20 15.4515 20C14.4315 20 13.3415 19.76 12.1916 19.27C11.0416 18.78 9.89156 18.12 8.75156 17.29C8.36156 17 7.97156 16.71 7.60156 16.4L10.8716 13.13C11.1516 13.34 11.4016 13.5 11.6116 13.61C11.6616 13.63 11.7216 13.66 11.7916 13.69C11.8716 13.72 11.9516 13.73 12.0416 13.73C12.2116 13.73 12.3416 13.67 12.4516 13.56L13.2116 12.81C13.4615 12.56 13.7015 12.37 13.9315 12.25C14.1615 12.11 14.3915 12.04 14.6415 12.04C14.8315 12.04 15.0315 12.08 15.2515 12.17C15.4715 12.26 15.7015 12.39 15.9515 12.56L19.2615 14.91C19.5215 15.09 19.7015 15.3 19.8115 15.55C19.9115 15.8 19.9715 16.05 19.9715 16.33Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="tp-contact-wrap-info-content">
                                        <p>Call us free</p>
                                        <a href="tel:9170104766938">+91 70104 76693</a>
                                    </div>
                                </div>
                                <div class="tp-contact-wrap-info d-flex align-items-center">
                                    <div class="tp-contact-wrap-info-icon">
                                        <span>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.5 5C18.8807 5 20 3.88071 20 2.5C20 1.11929 18.8807 0 17.5 0C16.1193 0 15 1.11929 15 2.5C15 3.88071 16.1193 5 17.5 5Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M17.5 5C18.8807 5 20 3.88071 20 2.5C20 1.11929 18.8807 0 17.5 0C16.1193 0 15 1.11929 15 2.5C15 3.88071 16.1193 5 17.5 5Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M18.72 6.31001C19.35 6.11001 20 6.60002 20 7.27002V12.51C20 16.01 18 17.51 15 17.51H5C2 17.51 0 16.01 0 12.51V5.51001C0 2.01001 2 0.51001 5 0.51001H12.61C13.26 0.51001 13.7 1.11002 13.58 1.74002C13.46 2.33002 13.48 2.96002 13.66 3.61002C14.03 4.95002 15.12 6.02001 16.46 6.37001C17.25 6.57001 18.02 6.53001 18.72 6.31001Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M9.9988 9.87002C9.1588 9.87002 8.3088 9.61002 7.6588 9.08002L4.5288 6.58002C4.2088 6.32002 4.14881 5.85002 4.4088 5.53002C4.66881 5.21002 5.13879 5.15003 5.45879 5.41003L8.5888 7.91003C9.3488 8.52003 10.6388 8.52003 11.3988 7.91003L12.5788 6.97002C12.8988 6.71002 13.3788 6.76002 13.6288 7.09002C13.8888 7.41002 13.8388 7.89002 13.5088 8.14002L12.3288 9.08002C11.6888 9.61002 10.8388 9.87002 9.9988 9.87002Z"
                                                    fill="white" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="tp-contact-wrap-info-content">
                                        <p>Our location</p>
                                        <a href="https://maps.app.goo.gl/VMAHyVvW2MXrTMKJ9">No.8, Sakthi Nagar, Dindigul
                                            Main
                                            Road, Near SBI Bank, Karumandapam,
                                            Tiruchirappalli, Tamil Nadu, India</a>
                                    </div>
                                </div>
                                <div class="tp-contact-wrap-info d-flex align-items-center">
                                    <div class="tp-contact-wrap-info-icon">
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4698 14.83L16.8598 17.99C16.9598 18.82 16.0698 19.4 15.3598 18.97L11.1698 16.48C10.7098 16.48 10.2599 16.45 9.81985 16.39C10.5599 15.52 10.9998 14.42 10.9998 13.23C10.9998 10.39 8.53985 8.09003 5.49985 8.09003C4.33985 8.09003 3.26985 8.42 2.37985 9C2.34985 8.75 2.33984 8.49999 2.33984 8.23999C2.33984 3.68999 6.28985 0 11.1698 0C16.0498 0 19.9998 3.68999 19.9998 8.23999C19.9998 10.94 18.6098 13.33 16.4698 14.83Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M9.43915 16.0661L9.4391 16.0661L9.43432 16.0719C8.54168 17.1539 7.11452 17.86 5.5 17.86H5.36272L5.24469 17.9301L2.63469 19.4801L2.63467 19.4801L2.62849 19.4839C2.60493 19.4983 2.58598 19.5014 2.5697 19.5008C2.551 19.5 2.52832 19.4936 2.50597 19.479C2.46109 19.4496 2.44138 19.4069 2.44641 19.3599L2.69602 17.393L2.73419 17.0922L2.48508 16.9193C1.26787 16.0745 0.5 14.7323 0.5 13.23C0.5 11.6558 1.33978 10.258 2.6492 9.42141L2.64921 9.42143L2.653 9.41896C3.46117 8.89229 4.4362 8.59009 5.5 8.59009C8.29622 8.59009 10.5 10.6975 10.5 13.23C10.5 14.2937 10.1074 15.2805 9.43915 16.0661Z"
                                                    fill="currentColor" stroke="#EBF3ED" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="tp-contact-wrap-info-content">
                                        <p>Email address</p>
                                        <a href="mailto:solub@gmail.com">info@kannaasandco.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->

        <!-- contact area start -->
        <div>
            <div class="tp-contact-thumb w-100"
                data-background="{{ asset('assets/frontend/img/others/contact-thumb.webp') }}">
            </div>
        </div>
        <!-- contact area end -->

        <!-- contact area start -->
        <section class="tp-contact-inner-form-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-contact-inner-wrap">
                            <div class="tp-contact-inner-heading d-flex justify-content-between align-items-center">
                                <h4 class="tp-contact-inner-wrap-title">How can we
                                    help?</h4>
                                <div class="tp-contact-inner-icon mb-60">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                            viewBox="0 0 60 60" fill="none">
                                            <g clip-path="url(#clip0_1_4884)">
                                                <path
                                                    d="M59.9592 6.05565C60.2517 4.69407 58.9168 3.54599 57.6147 4.04286L1.13085 25.6051C0.451054 25.8647 0.00140954 26.5163 3.3079e-06 27.2439C-0.00140293 27.9716 0.445663 28.6249 1.12452 28.8871L16.9919 35.0153V54.3174C16.9919 55.1317 17.551 55.8392 18.3432 56.0275C19.1301 56.2147 19.9506 55.8403 20.3195 55.1085L26.8821 42.0858L42.8972 53.9712C43.8714 54.6942 45.2717 54.2344 45.6262 53.0725C60.579 4.04673 59.9326 6.17882 59.9592 6.05565ZM46.0163 12.2335L18.5006 31.8293L6.66146 27.2569L46.0163 12.2335ZM20.5075 34.7159L44.4918 17.6352C23.8536 39.4072 24.9315 38.2613 24.8415 38.3824C24.7078 38.5623 25.0741 37.8612 20.5075 46.9232V34.7159ZM42.9906 49.6626L28.8936 39.2006L54.3829 12.3108L42.9906 49.6626Z"
                                                    fill="#1F2220" />
                                            </g>
                                            <defs>
                                                <clippath id="clip0_1_4884">
                                                    <rect width="60" height="60" fill="white" />
                                                </clippath>
                                            </defs>
                                        </svg></span>
                                </div>
                            </div>
                            <form autocomplete="off" method="POST" action="{{ route('contact.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="tp-contact-inner-form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <input type="text" name="name" value="{{ old('name') }}"
                                                    placeholder="Full name *" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <input type="text" name="phone" placeholder="Phone number *"
                                                    value="{{ old('phone') }}" required maxlength="10"
                                                    pattern="\d{10}"
                                                    oninput="this.value = this.value.replace(/\D/g, '')">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    placeholder="Email address *"required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <input type="text" name="subject" value="{{ old('subject') }}"
                                                    placeholder="Subject *"required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="tp-contact-input p-relative">
                                                <textarea name="message" placeholder="Write your message *"required>{{ old('message') }}</textarea>
                                            </div>
                                        </div>
                                        <label>We are committed to protecting
                                            your privacy. We will never collect
                                            information
                                            about you without your explicit
                                            consent.</label>

                                        <div class="col-xl-12 mt-20">
                                            <div
                                                class="tp-contact-btn-box d-flex flex-wrap justify-content-between align-items-center">
                                                <!-- Cloudflare Turnstile Widget -->
                                                <div class="cf-turnstile"
                                                    data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"></div><br>
                                                @error('cf-turnstile-response')
                                                    <div class="alert alert-danger mt-1 mb-1"
                                                        style="margin-top: 10px !important; color: red;">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <div class="tp-contact-inner-btn">
                                                    <button type="submit" class="tp-btn">Send
                                                        message</button>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="ajax-response mt-1 mb-0"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->
    </main>
    @include('pages.frontend.layouts.footer')
    @include('pages.frontend.layouts.backtotop')
    @include('pages.frontend.layouts.script')

</body>

</html>
