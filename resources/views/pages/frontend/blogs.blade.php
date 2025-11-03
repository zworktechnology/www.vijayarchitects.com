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
            data-background="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/birdsparadise-2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-60">
                        <div class="subtitle">Blog</div>
                        <div class="title">Latest News</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog -->
        <section class="blog-home section-padding">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $keydata => $blogsarr)
                    <div class="col-lg-4 col-md-6">
                        <div class="item mb-5">
                            <div class="post-img">
                                <a href="{{ route('blog.info', ['blog_id' => $blogsarr->id]) }}">
                                    <div class="img"> <img src="{{ asset('assets/backend/blogimage/'.$blogsarr->blog_image) }}"
                                            alt=""> </div>
                                </a>
                            </div>
                            <div class="cont">
                                <h4><a href="{{ route('blog.info', ['blog_id' => $blogsarr->id]) }}">{{ \Illuminate\Support\Str::words($blogsarr->title, 5, '...') }}</a></h4>
                                <div class="info"> <a href="{{ route('blog.info', ['blog_id' => $blogsarr->id]) }}"><span>Exterior Design{{$blogsarr->blogmaster->master_name}}</span></a> <a
                                        href="{{ route('blog.info', ['blog_id' => $blogsarr->id]) }}">{{$blogsarr->created_at->format('d M Y') }}</a> </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
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
