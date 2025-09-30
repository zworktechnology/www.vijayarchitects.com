<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg" data-sidebar="light"
    data-sidebar-image="none" data-preloader="disable">

<head>
    @include('layouts.auth.head')
</head>

<body>

    <div id="layout-wrapper">

        <header id="page-topbar">
            @include('layouts.auth.header')
        </header>

        @include('layouts.auth.top-bar')

        <div class="main-content">

            @yield('content')

            @include('layouts.auth.footer')

        </div>

    </div>

    @include('layouts.auth.d-script')

    @include('layouts.auth.o-script')

</body>

</html>
