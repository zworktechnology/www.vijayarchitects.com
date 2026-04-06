@php
    $projectAsset = static function (string $path): string {
        return asset(implode('/', array_map('rawurlencode', explode('/', $path))));
    };
@endphp
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
        .fullscreen-overlay {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .fullscreen-overlay.active {
            display: flex;
        }

        .fullscreen-overlay img {
            max-width: 90%;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            color: white;
            cursor: pointer;
            z-index: 10000;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            padding: 5px 10px;
            line-height: 1;
        }

        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 40px;
            color: white;
            cursor: pointer;
            z-index: 10000;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 50%;
            padding: 8px 14px;
            user-select: none;
        }

        .nav-arrow:hover,
        .close-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .nav-left {
            left: 30px;
        }

        .nav-right {
            right: 30px;
        }

        .gallery-masonry {
            display: flex;
            flex-wrap: wrap;
            margin-left: -8px;
            margin-right: -8px;
        }

        .gallery-masonry .gallery-item {
            width: 33.333333%;
            padding-left: 8px;
            padding-right: 8px;
            margin-bottom: 16px;
        }

        .gallery-masonry img {
            width: 100%;
            height: auto;
            display: block;
        }

        .project-gallery-thumb {
            height: 300px !important;
            object-fit: cover;
            object-position: center center;
        }

        .project-copy p:last-child {
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .gallery-masonry .gallery-item {
                width: 50%;
            }
        }

        @media (max-width: 576px) {
            .gallery-masonry .gallery-item {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        @include('pages.frontend.layouts.preloader')

        @include('pages.frontend.layouts.header')

        <section class="project-page section-padding">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <img class="img-fluid"
                                src="{{ $projectAsset($project['cover_image']) }}"
                                alt="{{ $project['title'] }} cover image">
                        </div>

                        @if (!empty($project['facts']))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="project-bar">
                                        <div class="row justify-content-between align-items-start text-left text-lg-start">
                                            @foreach ($project['facts'] as $fact)
                                                <div class="{{ $fact['class'] ?? 'col-md-3 mb-3' }}">
                                                    <h5>{{ $fact['label'] }}</h5>
                                                    <h6>{!! nl2br(e($fact['value'])) !!}</h6>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                @if (!empty($project['gallery_images']))
                    <div class="row mb-5">
                        <div class="col-md-4">
                            <div class="sub-title border-bot-light">Gallery</div>
                        </div>
                    </div>
                    <div class="gallery-masonry mb-5">
                        @foreach ($project['gallery_images'] as $index => $image)
                            <div class="gallery-item">
                                <img class="img-fluid enlargeable project-gallery-thumb"
                                    src="{{ $projectAsset($image) }}"
                                    alt="{{ $project['title'] }} gallery image {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                @endif

                @if (!empty($project['concept_sections']))
                    <div class="row mt-5">
                        <div class="col-md-12 project-copy">
                            @foreach ($project['concept_sections'] as $section)
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="sub-title border-bot-light">{{ $section['title'] }}</div>
                                    </div>
                                </div>

                                @foreach ($section['paragraphs'] as $paragraph)
                                    <p class="mb-3">{{ $paragraph }}</p>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endif

                @if (!empty($project['plan_images']))
                    <div class="row mb-5 mt-5">
                        <div class="col-md-4">
                            <div class="sub-title border-bot-light">Plans</div>
                        </div>
                    </div>
                    <div class="gallery-masonry">
                        @foreach ($project['plan_images'] as $index => $image)
                            <div class="gallery-item">
                                <img class="img-fluid enlargeable"
                                    src="{{ $projectAsset($image) }}"
                                    alt="{{ $project['title'] }} plan {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="fullscreen-overlay" id="imageOverlay">
                    <span class="close-btn" id="closeOverlay">&times;</span>
                    <span class="nav-arrow nav-left" id="prevImage">&#10094;</span>
                    <img src="" alt="" id="overlayImage">
                    <span class="nav-arrow nav-right" id="nextImage">&#10095;</span>
                </div>
            </div>
        </section>

        @include('pages.frontend.layouts.cta')
    </div>
    @include('pages.frontend.layouts.footer')
    @include('pages.frontend.layouts.script')
    <script>
        const overlay = document.getElementById('imageOverlay');
        const overlayImg = document.getElementById('overlayImage');
        const closeBtn = document.getElementById('closeOverlay');
        const prevBtn = document.getElementById('prevImage');
        const nextBtn = document.getElementById('nextImage');
        const images = Array.from(document.querySelectorAll('.enlargeable'));
        let currentIndex = 0;

        if (images.length > 0) {
            images.forEach((img, index) => {
                img.addEventListener('click', () => {
                    currentIndex = index;
                    showImage();
                });
            });
        }

        function showImage() {
            overlayImg.src = images[currentIndex].src;
            overlay.classList.add('active');
        }

        closeBtn.addEventListener('click', () => {
            overlay.classList.remove('active');
        });

        prevBtn.addEventListener('click', (e) => {
            if (images.length === 0) {
                return;
            }

            e.stopPropagation();
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage();
        });

        nextBtn.addEventListener('click', (e) => {
            if (images.length === 0) {
                return;
            }

            e.stopPropagation();
            currentIndex = (currentIndex + 1) % images.length;
            showImage();
        });

        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                overlay.classList.remove('active');
            }
        });

        document.addEventListener('keydown', (e) => {
            if (!overlay.classList.contains('active') || images.length === 0) {
                return;
            }

            if (e.key === 'ArrowLeft') {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                showImage();
            } else if (e.key === 'ArrowRight') {
                currentIndex = (currentIndex + 1) % images.length;
                showImage();
            } else if (e.key === 'Escape') {
                overlay.classList.remove('active');
            }
        });
    </script>
</body>

</html>
