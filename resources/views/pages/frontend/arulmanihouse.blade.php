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

        /* Masonry Gallery Styles */
        .gallery-masonry {
            column-count: 3;
            column-gap: 16px;
        }
        .gallery-masonry .gallery-item {
            break-inside: avoid;
            margin-bottom: 16px;
        }
        .gallery-masonry img {
            width: 100%;
            height: auto;
            display: block;
        }
        @media (max-width: 768px) {
            .gallery-masonry {
                column-count: 2;
            }
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        @include('pages.frontend.layouts.preloader')

        @include('pages.frontend.layouts.header')
        
        <!-- Project Page  -->
        <section class="project-page section-padding">
            <div class="container">

                <!-- project slider -->
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="">
                            <img class="img-fluid"
                                src="{{ asset('assets\frontend\img\projects\ARULMANI_RESIDENCE\birds paradise -1.jpg') }}"
                                alt="" width="auto">
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="project-bar">
                                    <div class="row justify-content-between align-items-center text-left text-lg-start">

                                        <div class="col-md-3 mb-3">
                                            <h5>Location</h5>
                                            <h6>Coimbatore</h6>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <h5>Year</h5>
                                            <h6>2013</h6>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <h5>Built-up area</h5>
                                            <h6>3350 Sq.Ft.</h6>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <h5>Site Area</h5>
                                            <h6>4500 Sq.Ft.</h6>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <h5>Contractor</h5>
                                            <h6>Thirunavukarasu</h6>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <h5>Site Engineer</h5>
                                            <h6>Sathyamoorthy</h6>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <h5>Structural Consultant</h5>
                                            <h6>Ram Kumar.,<br> Rays Consulting Engineers.</h6>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <h5>Electrical Consultant</h5>
                                            <h6>D. Nagarajan.,<br> DNR consultants.</h6>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <h5>Design Team</h5>
                                            <h6>Vijaykumar, Senthil Kumar, Ashok, Shanthi, Anitha, Kavitha.
                                            </h6>
                                        </div>
                                        <div class="col-md-3 mb-3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="sub-title border-bot-light">Gallery
                        </div>
                    </div>
                </div>
                <div>
                    <div class="gallery-masonry">
                        <div class="gallery-item">
                            <img class="img-fluid enlargeable"
                                src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/01.JPG') }}"
                                alt="">
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid enlargeable"
                                src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/02.jpeg') }}"
                                alt="">
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid enlargeable"
                                src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/04.JPG') }}"
                                alt="">
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid enlargeable"
                                src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/09.jpg') }}"
                                alt="">
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid enlargeable"
                                src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/14..JPG') }}"
                                alt="">
                        </div>
                        <div class="gallery-item">
                            <img class="img-fluid enlargeable"
                                src="{{ asset('assets/frontend/img/projects/ARULMANI_RESIDENCE/photos/06.jpeg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- Fullscreen Overlay -->
                <div class="fullscreen-overlay" id="imageOverlay">
                    <span class="close-btn" id="closeOverlay">&times;</span>
                    <span class="nav-arrow nav-left" id="prevImage">&#10094;</span>
                    <img src="" alt="" id="overlayImage">
                    <span class="nav-arrow nav-right" id="nextImage">&#10095;</span>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        {{-- <div class="row mb-5">
                            <div class="col-md-4">
                                <div class="sub-title border-bot-light">DESIGN BRIEF:
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled page-list mb-30">
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>The residence was for a small family in which all the three people were extremely
                                        interested
                                        in gardening and pets.</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p> Being a florist, the couple had collected artefacts and other display items
                                        which either
                                        needed a display space or a storage space when not displayed. The family
                                        entertained quiet a
                                        few stay in relatives and guests, young and old!</p>
                                </div>
                            </li>
                        </ul> --}}

                        <div class="row mb-5">
                            <div class="col-md-4">
                                <div class="sub-title border-bot-light">Design concept:
                                </div>
                            </div>
                        </div>

                        <ul class="list-unstyled page-list mb-30">
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>The house was designed to have 2 levels on the ground floor. An entry level to
                                        have just the visitors hall and the 2nd level to have the other facilities
                                        needed for the family and it's guests.</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>The common spaces on the ground and first floors were designed as one, large
                                        volume to manage the thermal comfort inside without the use of any air
                                        conditioning systems. The levels of privacy / connectivity needed for these
                                        spaces were obtained either by staggering or providing a free standing wall.
                                        Visual connectivity from various spaces inside helps the house function as a
                                        single space at the same time ensuring the privacy needed.</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>One narrow double floor high landscaped court, adjoining the family space acts
                                        not only as a visual treat but also helps in ventilating all the common spaces.
                                        The wind vent provided along with a glazed roof nearby enhances the ventury
                                        effect and ensures ventilation in a volume devoid of the conventional windows.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>Taking advantage of the weather which has only about a month when temperature
                                        rises high, adequate natural light and ventilation was provided in the higher
                                        levels and the roof with windows at the normal cill height only in the bedrooms
                                        and places which needed regular opening and closing.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>Perforated and CNC cut metal sheets provide security and insect proof opening
                                        where ever necessary. The play of light and shadow also enlivens the plain
                                        walls, consciously provided.
                                    </p>
                                </div>
                            </li>
                        </ul>

                        {{-- <div class="row mb-5">
                            <div class="col-md-4">
                                <div class="sub-title border-bot-light">Connectivity with nature:
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled page-list mb-30">
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>The theme was further to have nature inside as much as it was outside to provide
                                        enough space and opportunity for the client to pursue their hobby!</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>All spaces were designed to have at-least a visual connection if not physical, to
                                        a garden that is either a part of the interior or exterior!</p>
                                </div>
                            </li>
                        </ul> --}}


                    </div>
                </div>
            </div>
        </section>
        <!-- Other Projects -->
        {{-- <section class="projects section-padding">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="sub-title border-bot-light">Discover</div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title"><span>Other</span> Projects</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/07.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.01</span>
                                        <h6><a href="project-page.html">Intermediate Hall</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/12.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.02</span>
                                        <h6><a href="project-page.html">Modern Loft Kitchen</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/10.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.03</span>
                                        <h6><a href="project-page.html">Unique Stair Designs</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/11.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.04</span>
                                        <h6><a href="project-page.html">Best Kitchen Design</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/8.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.05</span>
                                        <h6><a href="project-page.html">Farm House Bedroom</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="items mb-4">
                                <div class="con">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/img/projects/9.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="category mb-0">Project P.06</span>
                                        <h6><a href="project-page.html">Lighting At Home</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Lets Talk -->
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

        const images = [...document.querySelectorAll('.enlargeable')];
        let currentIndex = 0;


        images.forEach((img, index) => {
            img.addEventListener('click', () => {
                currentIndex = index;
                showImage();
            });
        });

        function showImage() {
            overlayImg.src = images[currentIndex].src;
            overlay.classList.add('active');
        }


        closeBtn.addEventListener('click', () => {
            overlay.classList.remove('active');
        });


        prevBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage();
        });

        nextBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            currentIndex = (currentIndex + 1) % images.length;
            showImage();
        });


        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) overlay.classList.remove('active');
        });


        document.addEventListener('keydown', (e) => {
            if (!overlay.classList.contains('active')) return;
            if (e.key === 'ArrowLeft') currentIndex = (currentIndex - 1 + images.length) % images.length;
            if (e.key === 'ArrowRight') currentIndex = (currentIndex + 1) % images.length;
            if (e.key === 'Escape') overlay.classList.remove('active');
            showImage();
        });
    </script>
</body>

</html>
