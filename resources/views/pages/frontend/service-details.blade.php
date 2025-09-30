<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('pages.frontend.layouts.metaog')

    @include('pages.frontend.layouts.headerstyle')

</head>

<body>

    @include('pages.frontend.layouts.preloader')

    @include('pages.frontend.layouts.header')

    <main>

        <!-- beadcrumb area start -->
        <div class="tp-breadcrumb__ptb tp-breadcrumb__bg p-relative z-index-1 fix"
            data-background="{{ asset('assets/frontend/img/breadcrumb/breadcrumb-7.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="tp-breadcrumb__content p-relative">
                            <h3 class="tp-breadcrumb__title white">Service
                                Details</h3>
                            <div class="tp-breadcrumb__list white">
                                <span><a href="{{ route('index') }}">Home</a></span>
                                <span> / </span>
                                <span>Service Details</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- beadcrumb area end -->

        <!-- service area start -->
        <section class="tp-service-details-ptb pt-130 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tp-service-sidebar mb-50">
                            <div class="tp-service-sidebar-content mb-40">
                                <h4 class="tp-service-sidebar-title">Solar service
                                    category</h4>
                                <div class="tp-service-sidebar-list">
                                    <ul>
                                        <li id="on-grid"><a href="#">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>On-grid Solar System</div>
                                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="7"
                                                            height="12" viewBox="0 0 7 12" fill="none">
                                                            <path d="M1 11L6 6L1 1" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></div>
                                                </div>
                                            </a></li>
                                        <li id="off-grid"><a href="#">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>Off-grid Solar System</div>
                                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="7"
                                                            height="12" viewBox="0 0 7 12" fill="none">
                                                            <path d="M1 11L6 6L1 1" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></div>
                                                </div>
                                            </a></li>
                                        <li id="hybrid"><a href="#">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>Hybrid Solar System</div>
                                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="7"
                                                            height="12" viewBox="0 0 7 12" fill="none">
                                                            <path d="M1 11L6 6L1 1" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></div>
                                                </div>
                                            </a></li>
                                        <li id="street-light"><a href="#">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>Street Light System</div>
                                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="7"
                                                            height="12" viewBox="0 0 7 12" fill="none">
                                                            <path d="M1 11L6 6L1 1" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></div>
                                                </div>
                                            </a></li>
                                        <li id="solar-water"><a href="#">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>Solar Water Pumping</div>
                                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="7"
                                                            height="12" viewBox="0 0 7 12" fill="none">
                                                            <path d="M1 11L6 6L1 1" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></div>
                                                </div>
                                            </a></li>

                                        <li id="solar-heater"><a href="#">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>Solar Water Heater</div>
                                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="7"
                                                            height="12" viewBox="0 0 7 12" fill="none">
                                                            <path d="M1 11L6 6L1 1" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg></div>
                                                </div>
                                            </a></li>
                                    </ul>
                                </div>

                            </div>

                            <div class="tp-service-sidebar-info text-center">
                                <h4 class="tp-service-sidebar-info-title">Any
                                    questions? <br>
                                    Let’s talk</h4>
                                <div class="tp-service-sidebar-info-btn">
                                    <a href="{{ route('contact') }}">Let’s Talk <span><svg
                                                xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 10 10" fill="none">
                                                <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></span></a>
                                </div>
                                <div class="tp-service-sidebar-info-call">
                                    <a href="tel:917010476693"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path
                                                    d="M7.08443 4.77033L7.84597 6.1349C8.53323 7.36634 8.25734 8.9818 7.17492 10.0642C7.17492 10.0642 7.17492 10.0642 7.17492 10.0642C7.1748 10.0643 5.86209 11.3773 8.24247 13.7577C10.6222 16.1374 11.9351 14.826 11.9359 14.8252C11.936 14.8252 11.9359 14.8252 11.936 14.8252C13.0184 13.7428 14.6338 13.4669 15.8653 14.1542L17.2298 14.9157C19.0893 15.9535 19.3089 18.5612 17.6745 20.1957C16.6923 21.1778 15.4892 21.942 14.1592 21.9925C11.9202 22.0773 8.11782 21.5107 4.30364 17.6965C0.489452 13.8823 -0.0771917 10.08 0.00768762 7.84099C0.0581084 6.51097 0.822313 5.30782 1.80444 4.32569C3.43891 2.69122 6.04667 2.91082 7.08443 4.77033Z"
                                                    fill="currentColor" />
                                                <g opacity="0.65">
                                                    <path
                                                        d="M10.8646 0.739036C10.9423 0.25925 11.3959 -0.0662177 11.8757 0.0114575C11.9054 0.0171423 12.0009 0.0350017 12.051 0.046152C12.1511 0.0684501 12.2908 0.102781 12.4649 0.153502C12.8132 0.254933 13.2996 0.422028 13.8835 0.689721C15.0526 1.22567 16.6083 2.16321 18.2226 3.77756C19.8369 5.3919 20.7745 6.9476 21.3104 8.11662C21.5781 8.70051 21.7452 9.187 21.8467 9.53524C21.8974 9.70938 21.9317 9.84904 21.954 9.94917C21.9652 9.99923 21.9733 10.0394 21.979 10.0691L21.9857 10.1057C22.0634 10.5855 21.7409 11.0578 21.2611 11.1355C20.7827 11.213 20.332 10.8891 20.2524 10.4115C20.25 10.3987 20.2432 10.3643 20.236 10.3318C20.2215 10.2668 20.1965 10.1637 20.1568 10.0274C20.0774 9.75482 19.9395 9.34961 19.7105 8.85013C19.2531 7.85239 18.4305 6.47462 16.978 5.02212C15.5255 3.56963 14.1478 2.74709 13.15 2.28967C12.6505 2.06068 12.2453 1.92277 11.9727 1.84336C11.8364 1.80366 11.6651 1.76434 11.6001 1.74987C11.1226 1.67029 10.7872 1.21745 10.8646 0.739036Z"
                                                        fill="currentColor" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11.1301 4.78659C11.2636 4.31926 11.7507 4.04866 12.2181 4.18218L11.9763 5.02836C12.2181 4.18218 12.2181 4.18218 12.2181 4.18218L12.2198 4.18266L12.2216 4.18318L12.2255 4.18433L12.2346 4.18704L12.2578 4.19427C12.2755 4.19993 12.2976 4.2073 12.3239 4.21665C12.3766 4.23535 12.4463 4.26194 12.5317 4.29856C12.7026 4.37182 12.9362 4.48496 13.2231 4.65476C13.7975 4.99467 14.5815 5.55928 15.5026 6.48035C16.4236 7.40143 16.9883 8.18547 17.3282 8.7598C17.498 9.04671 17.6111 9.28029 17.6844 9.45123C17.721 9.53666 17.7476 9.60631 17.7663 9.65901C17.7756 9.68535 17.783 9.70745 17.7887 9.72514L17.7959 9.74836L17.7986 9.75745L17.7997 9.76137L17.8003 9.76316C17.8003 9.76316 17.8007 9.76485 16.9546 10.0066L17.8007 9.76485C17.9343 10.2322 17.6637 10.7193 17.1963 10.8528C16.733 10.9852 16.2502 10.7203 16.1119 10.2602L16.1075 10.2476C16.1013 10.23 16.0883 10.1953 16.0666 10.1446C16.0232 10.0433 15.9445 9.87754 15.8135 9.65625C15.5519 9.21418 15.0793 8.54623 14.258 7.72492C13.4367 6.9036 12.7687 6.43107 12.3267 6.16944C12.1054 6.03847 11.9397 5.95974 11.8384 5.91633C11.7877 5.8946 11.753 5.88165 11.7353 5.8754L11.7227 5.87106C11.2626 5.73274 10.9977 5.24996 11.1301 4.78659Z"
                                                        fill="currentColor" />
                                                </g>
                                            </svg></span>+91 70104 76693</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details-section col-lg-8">
                        <div id="on-grid-details" class="tp-service-details-right-wrap">
                            <div class="tp-service-details-thumb mb-50">
                                <img src="{{ asset('assets/frontend/img/service/service-details/service-1.webp') }}"
                                    alt>
                            </div>
                            <div class="tp-service-details-content mb-45">
                                <h3 class="tp-service-details-section-title mb-20">Powering
                                    your spaces with efficiency</h3>
                                <p class="mb-35">An on-grid solar system is the most
                                    cost-effective and widely used solar
                                    solution for residential and commercial
                                    properties. It connects directly to the power
                                    grid,
                                    allowing you to generate electricity from solar
                                    panels while seamlessly integrating with the
                                    existing utility supply. This system reduces
                                    electricity bills and enables you to feed excess
                                    energy back into the grid for credits.
                                </p>
                                <p class="mb-0">We provide advanced on-grid solar
                                    solutions that ensure optimal energy
                                    efficiency, durability, and long-term savings. Our
                                    team of experts designs and installs
                                    customized systems tailored to your power
                                    consumption needs, helping you embrace sustainable
                                    energy without compromising reliability.
                                </p>
                            </div>
                            <div class="tp-service-details-feature mb-65">
                                <h4 class="tp-service-details-feature-title mb-30">Going
                                    beyond the usual</h4>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Seamless Integration:</span>
                                        <p>Works with the existing power grid for
                                            uninterrupted supply.
                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Cost Savings: </span>
                                        <p>Reduce electricity bills and earn from
                                            surplus energy.
                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Smart Monitoring:</span>
                                        <p>Track energy production and usage in real
                                            time.
                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Eco-Friendly Solution: </span>
                                        <p>Lower your carbon footprint with clean
                                            energy.

                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="off-grid-details" class="tp-service-details-right-wrap">
                            <div class="tp-service-details-thumb mb-50">
                                <img src="{{ asset('assets/frontend/img/service/service-details/service-2.webp') }}"
                                    alt>
                            </div>
                            <div class="tp-service-details-content mb-45">
                                <h3 class="tp-service-details-section-title mb-20">Independent
                                    power, anytime, anywhere
                                </h3>
                                <p class="mb-35">An off-grid solar system is a
                                    self-sustaining energy solution designed for
                                    areas without reliable grid access. It generates
                                    and stores electricity using solar panels
                                    and battery storage, ensuring uninterrupted power
                                    even in remote locations. Ideal for homes,
                                    farms, and industries, this system provides energy
                                    independence and long-term savings.

                                </p>
                                <p class="mb-0">We offer high-performance off-grid
                                    solar solutions tailored to your energy
                                    needs. Our expert team ensures a seamless
                                    installation with advanced battery technology,
                                    maximizing efficiency and reliability.

                                </p>
                            </div>
                            <div class="tp-service-details-feature mb-65">
                                <h4 class="tp-service-details-feature-title mb-30">Going
                                    beyond the usual</h4>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Energy Independence:</span>
                                        <p>No reliance on the power grid.
                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Reliable Backup:</span>
                                        <p>Battery storage for continuous power.
                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Cost-Effective: </span>
                                        <p>Save on long-term electricity expenses.
                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Sustainable Living: </span>
                                        <p>100% renewable energy solution.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="hybrid-details" class="tp-service-details-right-wrap">
                            <div class="tp-service-details-thumb mb-50">
                                <img src="{{ asset('assets/frontend/img/service/service-details/service-3.webp') }}"
                                    alt>
                            </div>
                            <div class="tp-service-details-content mb-45">
                                <h3 class="tp-service-details-section-title mb-20">Seamless
                                    power, maximum efficiency

                                </h3>
                                <p class="mb-35">A hybrid solar system combines the
                                    best of both worlds—on-grid connectivity
                                    with off-grid backup. It allows you to use solar
                                    power during the day, store excess energy in
                                    batteries, and switch to the grid when needed.
                                    This ensures continuous power supply, even
                                    during outages, making it a smart and flexible
                                    energy solution.

                                </p>
                                <p class="mb-0">Our advanced hybrid solar systems are
                                    designed for efficiency, reliability, and
                                    cost savings. With intelligent energy management,
                                    you get the most out of your solar
                                    investment.

                                </p>
                            </div>
                            <div class="tp-service-details-feature mb-65">
                                <h4 class="tp-service-details-feature-title mb-30">Going
                                    beyond the usual</h4>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Uninterrupted Power:
                                        </span>
                                        <p>Switches seamlessly between solar, battery,
                                            and grid.

                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Energy Savings:
                                        </span>
                                        <p>Reduces electricity bills with smart power
                                            usage.

                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Reliable Backup:
                                        </span>
                                        <p>Keeps your home or business powered during
                                            outages.

                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Eco-Friendly:
                                        </span>
                                        <p>Maximizes renewable energy usage

                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="street-light-details" class="tp-service-details-right-wrap">
                            <div class="tp-service-details-thumb mb-50">
                                <img src="{{ asset('assets/frontend/img/service/service-details/service-4.webp') }}"
                                    alt>
                            </div>
                            <div class="tp-service-details-content mb-45">

                                <h3 class="tp-service-details-section-title mb-20">Illuminate
                                    roads with sustainable energy

                                </h3>
                                <p class="mb-35">Solar street light systems provide
                                    a reliable and eco-friendly lighting
                                    solution for roads, pathways, and public spaces.
                                    Powered by solar panels, these lights store
                                    energy during the day and automatically illuminate
                                    at night, ensuring efficient and
                                    cost-effective outdoor lighting.

                                </p>
                                <p class="mb-0">Designed for durability and energy
                                    efficiency, our street light systems
                                    require minimal maintenance and eliminate the need
                                    for traditional electricity, making
                                    them an ideal choice for smart cities and remote
                                    locations.

                                </p>
                            </div>
                            <div class="tp-service-details-feature mb-65">
                                <h4 class="tp-service-details-feature-title mb-30">Going
                                    beyond the usual</h4>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Automatic Operation:
                                        </span>
                                        <p>Lights up at dusk and turns off at dawn.

                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Energy Efficient:
                                        </span>
                                        <p>Reduces electricity costs and carbon
                                            footprint.

                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Weather Resistant:
                                        </span>
                                        <p>Designed to withstand harsh outdoor
                                            conditions.

                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Low Maintenance:
                                        </span>
                                        <p>Long-lasting and cost-effective solution.

                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div id="solar-water-details" class="tp-service-details-right-wrap">
                            <div class="tp-service-details-thumb mb-50">
                                <img src="{{ asset('assets/frontend/img/service/service-details/service-5.webp') }}"
                                    alt>
                            </div>
                            <div class="tp-service-details-content mb-45">
                                <h3 class="tp-service-details-section-title mb-20">Sustainable
                                    water solutions for agriculture
                                    and beyond
                                </h3>
                                <p class="mb-35">Solar water pumping systems harness
                                    solar energy to provide a reliable and
                                    cost-effective solution for irrigation, livestock
                                    watering, and community water supply. By
                                    eliminating the need for grid power or fuel, these
                                    systems ensure uninterrupted water access while
                                    reducing operational costs.

                                </p>
                                <p class="mb-0">Built for efficiency and durability,
                                    our solar water pumps are designed to work in
                                    remote locations, making them an ideal choice for
                                    farmers, industries, and rural communities seeking
                                    sustainable water solutions.

                                </p>
                            </div>
                            <div class="tp-service-details-feature mb-65">
                                <h4 class="tp-service-details-feature-title mb-30">Going
                                    beyond the usual</h4>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Energy Independent:
                                        </span>
                                        <p>Operates without grid electricity or fuel.

                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Cost-Effective: </span>
                                        <p>Reduces long-term operational expenses.

                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Eco-Friendly:
                                        </span>
                                        <p>Uses renewable energy, reducing carbon
                                            footprint.
                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Reliable Performance:
                                        </span>
                                        <p>Works efficiently even in remote areas
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="solar-heater-details" class="tp-service-details-right-wrap">
                            <div class="tp-service-details-thumb mb-50">
                                <img src="{{ asset('assets/frontend/img/service/home-3/solar_water_heater.png') }}" height="400"
                                    alt>
                            </div>
                            <div class="tp-service-details-content mb-45">
                                <h3 class="tp-service-details-section-title mb-20">Uses energy from the sun to heat
                                    water
                                </h3>
                                <p class="mb-35">A solar water heater is a device that uses energy from the sun to
                                    heat water for residential, commercial, or industrial use. It typically consists of
                                    solar collectors (like flat-plate collectors or evacuated tubes) that absorb
                                    sunlight, and a storage tank to hold the heated water.

                                </p>
                                <p class="mb-0"> The system can be either active (using pumps and controllers) or
                                    passive (relying on gravity and natural circulation). Solar water heaters help
                                    reduce electricity or gas bills and are an eco-friendly alternative to traditional
                                    water heating methods.

                                </p>
                            </div>
                            <div class="tp-service-details-feature mb-65">
                                <h4 class="tp-service-details-feature-title mb-30">Going
                                    beyond the usual</h4>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Energy Savings
                                        </span>
                                        <p> Uses free sunlight, reducing electricity or gas bills.

                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Eco-Friendly </span>
                                        <p>Lowers carbon footprint by using renewable energy.

                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Low Maintenance
                                        </span>
                                        <p>Once installed, it usually requires minimal upkeep.
                                        </p>
                                    </div>
                                </div>
                                <div class="tp-service-details-feature-item d-flex align-items-start">
                                    <span>
                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L3.5 6.5L1 4" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="tp-service-details-feature-content">
                                        <span>Simple Technology
                                        </span>
                                        <p>Homes with green energy systems are often more attractive to buyers.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end -->
    </main>


    @include('pages.frontend.layouts.footer')

    @include('pages.frontend.layouts.backtotop')

    @include('pages.frontend.layouts.script')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Mapping menu item IDs to corresponding content section IDs
            const menuItems = {
                "on-grid": "on-grid-details",
                "off-grid": "off-grid-details",
                "hybrid": "hybrid-details",
                "street-light": "street-light-details",
                "solar-water": "solar-water-details",
                "solar-heater": "solar-heater-details"
            };

            // Hide all sections initially except the first one
            Object.values(menuItems).forEach((id, index) => {
                const section = document.getElementById(id);
                if (section) {
                    section.style.display = index === 0 ? "block" : "none"; // Show only first section
                }
            });

            // Attach event listeners to menu items
            Object.keys(menuItems).forEach(menuId => {
                const menuItem = document.getElementById(menuId);
                if (menuItem) {
                    menuItem.addEventListener("click", function(event) {
                        event.preventDefault(); // Prevent default link behavior

                        // Hide all sections
                        Object.values(menuItems).forEach(id => {
                            const section = document.getElementById(id);
                            if (section) section.style.display = "none";
                        });

                        // Show the clicked section
                        const targetSection = document.getElementById(menuItems[menuId]);
                        if (targetSection) targetSection.style.display = "block";
                    });
                }
            });
        });
    </script>

</body>

</html>
