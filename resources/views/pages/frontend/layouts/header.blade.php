<!-- offcanvas area start -->
<div class="offcanvas__area">
    <div class="offcanvas__close">
        <button class="offcanvas__close-btn offcanvas-close-btn">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <div class="offcanvas__wrapper">
        <div class="offcanvas__content">
            <div class="offcanvas__top mb-40">
                <div class="offcanvas__logo">
                    <a href="{{ route('index') }}">
                        <img data-width="200" src="{{ asset('assets/frontend/img/logo/logo-white.webp') }}"
                            alt="logo" />
                    </a>
                </div>
            </div>

            <div class="tp-offcanvas-menu fix d-xl-none mb-30">
                <nav></nav>
            </div>

            <div class="offcanvas__contact d-none d-xl-block">
                <div class="offcanvas__text mb-30">
                    <p>
                        The design readable content of a page hen looking at its
                        layout
                        The point our of using Movie template
                    </p>
                </div>

            </div>
            <div class="offcanvas-info mb-30">
                <h4 class="offcanvas__title">Contacts</h4>
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a
                            href="https://www.google.com/maps/search/86+Road+Broklyn+Street,+600+New+York,+USA/@40.6897806,-74.0278086,12z/data=!3m1!4b1">No.8,
                            Sakthi Nagar, Dindigul Main Road, Near SBI Bank,
                            Karumandapam, Tiruchirappalli, Tamil Nadu, India
                        </a>
                    </div>
                </div>
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a href="mailto:info@kannaasandco.com">
                            info@kannaasandco.com </a>
                    </div>
                </div>
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a href="tel:917010476693"> +91 70104 76693</a>
                    </div>
                </div>
            </div>
            <div class="offcanvas__social">
                <a class="icon facebook" href="https://www.facebook.com/kannaasandco"target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="icon instagram" href="https://www.instagram.com/kannaasandco"target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                <a class="icon youtube" href="https://www.youtube.com/@kannaasandco"target="_blank"><i
                        class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- offcanvas area end -->

<!-- header area start -->
<header class="tp-header-2-ptb">
    <div class="tp-header-2-top d-none d-md-block">
        <div class="container container-1320">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="tp-header-2-date">
                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 3.8V8L10.8 9.4M15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Monday - Saturday : 9:00 AM to 7:00 PM | </span>
                        <span><a href="tel:917010476693">+91 70104 76693</a></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tp-header-2-right">
                        <div class="tp-header-lang">
                            <a style="color: white">Follow us on </a>
                        </div>
                        <div class="tp-header-2-social">
                            <a href="https://www.facebook.com/kannaasandco"target="_blank"><i
                                    class="fa-brands fa-facebook"></i></a>

                            <a href="https://www.instagram.com/kannaasandco"target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@kannaasandco"target="_blank"><i
                                    class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-header-main-sticky tp-header-2-main p-relative">
        <div class="container container-1320">
            <div class="d-flex justify-content-between align-items-center">
                <div class="tp-header-logo">
                    <a href="{{ route('index') }}">
                        <img data-width="200" data-height="200"
                            src="{{ asset('assets/frontend/img/logo/logo-black.webp') }}" alt />
                    </a>
                </div>
                <div class="tp-header-box d-flex align-items-center justify-content-between">
                    <div class="tp-header-2-menu">
                        <div class="tp-main-menu d-none d-xl-block">
                            <nav class="tp-mobile-menu-active">
                                <ul>
                                    <li>
                                        <a class="hover" href="{{ route('index') }}">Home</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service') }}">Services</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('projects') }}">Projects</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('amcplans') }}">AMC Plans</a>

                                    </li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="tp-header-main-right d-flex align-items-center">

                        <div class="tp-header-2-main-right-btn d-none d-lg-block">
                            <a href="http://wa.me/918925511901" target='_blank' class="tp-btn">
                                <span><svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.111 1C12.111 1 14.5554 1.22222 17.6665 4.33332C20.7776 7.44442 20.9998 9.88886 20.9998 9.88886M12.3411 4.92811C12.3411 4.92811 13.4411 5.24238 15.091 6.89229C16.7409 8.5422 17.0552 9.64214 17.0552 9.64214M7.7941 9.69955C7.79398 9.69967 6.55095 10.9429 8.80499 13.197C11.0584 15.4503 12.3016 14.2087 12.3024 14.2079M7.7941 9.69955C8.81906 8.67458 9.08031 7.14487 8.42954 5.97878L7.70841 4.68665C6.72573 2.92584 4.25638 2.71789 2.70867 4.2656C1.77867 5.1956 1.05502 6.33489 1.00728 7.59432C0.926905 9.71447 1.46347 13.315 5.07521 16.9267C8.68695 20.5385 12.2875 21.0751 14.4076 20.9947C15.6671 20.9469 16.8064 20.2233 17.7364 19.2933C19.2841 17.7456 19.0761 15.2762 17.3153 14.2935L16.0232 13.5724C14.8571 12.9217 13.3274 13.1829 12.3024 14.2079M7.7941 9.69955C7.7941 9.69955 7.79409 9.69956 7.7941 9.69955ZM12.3024 14.2079C12.3024 14.2078 12.3024 14.2079 12.3024 14.2079Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    </svg></span>Chat
                                with us
                            </a>
                        </div>

                        <div class="tp-header-2-hamburger d-xl-none offcanvas-open-btn">
                            <button class="hamburger-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="tp-header-2-ptb p-relative tp-int-menu tp-header-sticky-cloned">
    <div class="tp-header-main-sticky p-relative">
        <div class="container container-1320">
            <div class="d-flex justify-content-between align-items-center">
                <div class="tp-header-logo">
                    <a href="{{ route('index') }}">
                        <img data-width="200" data-height="200"
                            src="{{ asset('assets/frontend/img/logo/logo-black.webp') }}" alt />
                    </a>
                </div>
                <div class="tp-header-box d-flex align-items-center justify-content-between">
                    <div class="tp-header-2-menu">
                        <div class="tp-main-menu d-none d-xl-block">
                            <nav class>
                                <ul>
                                    <li>
                                        <a class="hover" href="{{ route('index') }}">Home</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service') }}">Service</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('projects') }}">Projects</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('amcplans') }}">AMC Plans</a>

                                    </li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="tp-header-main-right d-flex align-items-center">

                        <div class="tp-header-2-main-right-btn d-none d-lg-block">
                            <a href="http://wa.me/918925511901" class="tp-btn">
                                <span><svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.111 1C12.111 1 14.5554 1.22222 17.6665 4.33332C20.7776 7.44442 20.9998 9.88886 20.9998 9.88886M12.3411 4.92811C12.3411 4.92811 13.4411 5.24238 15.091 6.89229C16.7409 8.5422 17.0552 9.64214 17.0552 9.64214M7.7941 9.69955C7.79398 9.69967 6.55095 10.9429 8.80499 13.197C11.0584 15.4503 12.3016 14.2087 12.3024 14.2079M7.7941 9.69955C8.81906 8.67458 9.08031 7.14487 8.42954 5.97878L7.70841 4.68665C6.72573 2.92584 4.25638 2.71789 2.70867 4.2656C1.77867 5.1956 1.05502 6.33489 1.00728 7.59432C0.926905 9.71447 1.46347 13.315 5.07521 16.9267C8.68695 20.5385 12.2875 21.0751 14.4076 20.9947C15.6671 20.9469 16.8064 20.2233 17.7364 19.2933C19.2841 17.7456 19.0761 15.2762 17.3153 14.2935L16.0232 13.5724C14.8571 12.9217 13.3274 13.1829 12.3024 14.2079M7.7941 9.69955C7.7941 9.69955 7.79409 9.69956 7.7941 9.69955ZM12.3024 14.2079C12.3024 14.2078 12.3024 14.2079 12.3024 14.2079Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    </svg></span>Chat
                                with us
                            </a>
                        </div>

                        <div class="tp-header-hamburger d-xl-none offcanvas-open-btn">
                            <button class="hamburger-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
