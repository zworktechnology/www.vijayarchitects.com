<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg" data-sidebar="light"
    data-sidebar-image="none" data-preloader="disable">

<head>
    @include('layouts.guest.head')
</head>

<body>

    <div class="auth-page-wrapper pt-5">

        @yield('content')

        @include('layouts.guest.footer')

    </div>

    @include('layouts.guest.d-script')

</body>

</html>
