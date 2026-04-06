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
        <div class="banner-header about-banner-header valign bg-img bg-fixed" data-overlay-dark="4"
            data-background="{{ asset('assets/frontend/img/about_banner.jpg') }}" style="background-position: top top">
        </div>


        <section class="service-detail-section">
            <div class="container">
                <div class="row">
                    <div class="section-title">{{ strtoupper($serviceDetail['title']) }}</div>
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

        @include('pages.frontend.layouts.cta')
    </div>

    @include('pages.frontend.layouts.footer')
    @include('pages.frontend.layouts.script')
</body>

</html>