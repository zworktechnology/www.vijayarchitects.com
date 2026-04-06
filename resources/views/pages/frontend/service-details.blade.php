<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('pages.frontend.layouts.metaog')

    @include('pages.frontend.layouts.headerstyle')
    @turnstileScripts()
    <style>
        .service-page-banner {
            min-height: 420px;
            padding-top: 0;
            padding-bottom: 0;
        }

        .service-page-heading {
            padding-top: 180px;
            width: 100%;
        }

        .service-page-heading .title {
            color: #fff;
        }

        .service-detail-section {
            padding: 100px 0;
        }

        .service-detail-card {
            padding: 34px 30px;
            background: #fff;
            border-left: 4px solid #c53b32;
            box-shadow: 0 20px 45px rgba(17, 17, 17, 0.06);
        }

        .service-detail-card .sub-title {
            margin-bottom: 18px;
        }

        .service-detail-card .section-title {
            margin-bottom: 14px;
        }

        .service-detail-tagline {
            margin-bottom: 0;
            color: #1b1b1b;
            font-size: 16px;
            line-height: 1.8em;
        }

        .service-detail-body p {
            margin-bottom: 18px;
        }

        .service-detail-subhead {
            margin: 34px 0 18px;
            color: #1b1b1b;
            font-family: 'Oswald', sans-serif;
            font-size: 24px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .service-subsection + .service-subsection {
            margin-top: 48px;
        }

        .service-quote-block {
            margin-top: 24px;
            padding: 24px 26px;
            background: #fff;
            border-left: 4px solid #c53b32;
            box-shadow: 0 14px 35px rgba(17, 17, 17, 0.05);
        }

        .service-quote-block h6 {
            margin-bottom: 12px;
            color: #c53b32;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .service-quote-block blockquote {
            margin: 0;
            color: #555;
            font-size: 16px;
            line-height: 1.9em;
        }

        @media (max-width: 767px) {
            .service-page-banner {
                min-height: 220px;
            }

            .service-page-heading {
                padding-top: 90px;
            }

            .service-detail-section {
                padding: 70px 0;
            }

            .service-detail-card,
            .service-quote-block {
                padding: 24px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        @include('pages.frontend.layouts.preloader')
        @include('pages.frontend.layouts.header')

        <!-- Header Banner -->
        <div class="banner-header service-page-banner valign bg-img bg-fixed" data-overlay-dark="4"
            data-background="{{ asset('assets/frontend/img/about_banner.jpg') }}" style="background-position: top top">
            <div class="container service-page-heading">
                <div class="row">
                    <div class="col-md-12 caption text-end">
                        <div class="subtitle">Our Services</div>
                        <div class="title">{{ strtoupper($serviceDetail['title']) }}</div>
                    </div>
                </div>
            </div>
        </div>


        <section class="service-detail-section">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="service-detail-body">
                            @foreach ($serviceDetail['paragraphs'] ?? [] as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach

                            @if (!empty($serviceDetail['subheading']))
                                <div class="service-detail-subhead">{{ $serviceDetail['subheading'] }}</div>
                            @endif

                            @foreach ($serviceDetail['quotes'] ?? [] as $quote)
                                <div class="service-quote-block">
                                    @if (!empty($quote['author']))
                                        <h6>{{ $quote['author'] }}</h6>
                                    @endif
                                    <blockquote>{!! nl2br(e($quote['text'])) !!}</blockquote>
                                </div>
                            @endforeach

                            @foreach ($serviceDetail['sections'] ?? [] as $section)
                                <div class="service-subsection">
                                    <div class="service-detail-subhead">{{ $section['title'] }}</div>

                                    @foreach ($section['paragraphs'] ?? [] as $paragraph)
                                        <p>{{ $paragraph }}</p>
                                    @endforeach

                                    @foreach ($section['quotes'] ?? [] as $quote)
                                        <div class="service-quote-block">
                                            @if (!empty($quote['author']))
                                                <h6>{{ $quote['author'] }}</h6>
                                            @endif
                                            <blockquote>{!! nl2br(e($quote['text'])) !!}</blockquote>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
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
