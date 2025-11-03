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
            data-background="{{ asset('assets/frontend/img/slider/1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-60">
                        <div class="subtitle"><a href="blog.html">Blog</a></div>
                        <div class="title">{{ $blogs->title }}</div>
                        <div class="wrap">
                            <div class="author">{{ $blogs->writer_name }}</div>
                            <div class="date-comment"> <i
                                    class="ti-calendar"></i>{{ $blogs->created_at->format('d M Y') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog -->
        <section class="blog ">
            <div class="container">
                <div class="row">
                    <!-- content -->
                    <div class="col-lg-8 col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <!-- Post  -->
                        <section class="post  section-padding">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                                        <img src="{{ asset('assets/backend/blogimage/' . $blogs->blog_image) }}"
                                            class="img-responsive mb-5" alt="">
                                        <div class="date"> <span class="ti-time"></span>
                                            {{ $blogs->created_at->format('d M Y') }} <span class="ti-tag"></span>
                                            {{ $blogs->writer_name }} </div>
                                        <h2>{{ $blogs->title }}</h2>
                                        <p>“{{ $blogs->short_note }}”</p>
                                        <p>{!! $blogs->blog_content !!}</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- sidebar -->
                    <div class="col-lg-4 col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <div class="sidebar">

                            <div class="widget category">
                                <h6 class="title-widget">Categories</h6>
                                <ul class="rest">
                                    @foreach ($categories as $keydata => $categories_arr)
                                        <li class="flex items-center justify-between">
                                            <span>
                                                <a href="#"
                                                    class="text-1 lh-20 fw-5">{{ $categories_arr->master_name }}</a></span>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget last-post-thum">
                                <h6 class="title-widget">Latest Posts</h6>
                                @foreach ($randomBlogs as $blogs)
                                    <div class="item">
                                        <div class="valign">
                                            <div class="img">
                                                <a href="{{ route('blog.info', ['blog_id' => $blogs->id]) }}"><img
                                                        src="{{ asset('assets/backend/blogimage/' . $blogs->blog_image) }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="cont">
                                            <h6><a href="{{ route('blog.info', ['blog_id' => $blogs->id]) }}">{{ \Illuminate\Support\Str::words($blogs->title, 5, '...') }}</a></h6> <span><a
                                                    href="{{ route('blog.info', ['blog_id' => $blogs->id]) }}">{{ $blogs->created_at->format('d M Y') }}</a></span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Lets Talk -->
     @include('pages.frontend.layouts.cta')
    </div>
    @include('pages.frontend.layouts.footer')
    @include('pages.frontend.layouts.script')
</body>

</html>
