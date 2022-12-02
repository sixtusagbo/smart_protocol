<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="An investment platform">
    <meta name="keywords"
        content="smartprotocol, smartchain, trade, forex, crypto, investment, invest, bitcoin, ethereum">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Smart Protocol">
    <meta property="og:description" content="Wallet Connect">
    <meta property="og:image" content="{{ asset('images/banner.png') }}">
    <!-- Twitter -->
    <meta property="twitter:card" content="website">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="Smart Protocol">
    <meta property="twitter:description" content="Wallet Connect">
    <meta property="twitter:image" content="{{ asset('images/banner.png') }}">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css?v=') . time() }}">
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    <main class="container">
        <section data-aos="fade-up" class="header">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" class="logo-image">

            <div class="intro-text">
                @yield('intro-title')

                <p class="tagline">
                    @yield('tagline')
                </p>
                @yield('intro-action')
            </div>
        </section>

        @yield('content')
    </main>

    <footer data-aos="fade-up" class="mt-5 w-100 text-center">
        <p class="fw-light mb-1">
            Contact us <a href="mailto:support@smartprotocol.cc">support@smartprotocol.cc</a>
        </p>
        <small class="text-style-2">
            Most secure tool for all wallets node correction featuring kyc and others interesting
            functions
        </small>
        <ul class="list-unstyled">
            <div class="my-2">
                <a href="{{ config('myglobals.telegram') }}" class="text-decoration-none link-dark">
                    <img src="{{ asset('images/telegram.svg') }}" alt="" width="20" height="20">
                    Telegram
                </a>
            </div>
            <div class="my-2">
                <a href="{{ config('myglobals.twitter') }}" class="text-decoration-none link-dark">
                    <img src="{{ asset('images/twitter.svg') }}" alt="" width="20" height="20">
                    Twitter
                </a>
            </div>
            <div class="my-2">
                <a href="{{ config('myglobals.instagram') }}" class="text-decoration-none link-dark">
                    <img src="{{ asset('images/instagram.svg') }}" alt="" width="20" height="20">
                    Instagram
                </a>
            </div>
        </ul>
    </footer>

    <!-- Scripts -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('scripts')
    <script src="{{ asset('js/app.js?v=') . time() }}"></script>
</body>

</html>
