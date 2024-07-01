<!doctype html>
<html lang="fr" data-layout="vertical" data-sidebar="gradient-4" data-sidebar-size="lg" data-sidebar-image="none"
    data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo_v1.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/aos.css') }}" />
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('livewire-styles')


</head>

<body>
    <main>
        <div id="layout-wrapper">
            <header id="page-topbar">
                @include('front-office.layout.topbar')
            </header>
            <div class="app-menu navbar-menu">
                <div class="navbar-brand-box">
                    @include('front-office.layout.logo')
                </div>
                <div id="scrollbar">
                    @include('front-office.layout.sidebar')
                </div>
            </div>
            <div class="vertical-overlay"></div>
            <div class="main-content overflow-hidden">

                <div class="page-content">
                    <div class="container-fluid">

                        @yield('component')

                        @yield('front-layout-content')
                    </div>
                </div>
                <footer class="footer">
                    @include('front-office.layout.footer')
                </footer>

            </div>
    </main>
    <script src="{{ asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/libs/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('assets/js/pages/animation-aos.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @stack('livewire-scripts')
</body>

</html>
