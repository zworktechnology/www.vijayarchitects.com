        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo -->
                <div class="logo-wrapper">
                    <a class="logo" href="{{ route('index') }}"> <img src="{{ asset('assets/frontend/img/logo.png') }}"
                            class="logo-img" alt=""> </a>
                    <!-- <a class="logo" href="index.html"> <h2>ArchSan <span>Architecture</span></h2> </a> -->
                </div>
                <!-- Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span
                        class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item "><a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}"
                                href="{{ route('index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                href="{{ route('about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}"
                                href="{{ route('service') }}">Services</a></li>
                        <li class="nav-item "><a class="nav-link {{ request()->routeIs('projects','projectdetails') ? 'active' : '' }}"
                                href="{{ route('projects') }}">Projects</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('blogs','blogdetails') ? 'active' : '' }}"
                                href="{{ route('blogs') }}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
