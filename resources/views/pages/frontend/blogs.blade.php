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
            data-background="{{ asset('assets/frontend/img/slider/3.jpg') }}">
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
        <section class="lets-talk">
            <div class="background bg-img bg-fixed section-padding"
                data-background="{{ asset('assets/frontend/img/slider/1.jpg') }}" data-overlay-dark="6">
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
