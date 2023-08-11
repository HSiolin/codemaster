<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>


    <!-- Scripts -->
    <script src="{{ asset('site/js/jquery.js') }}" defer></script>
    <script src="{{ asset('site/js/bootstrap.js') }}" defer></script>


    <script src="{{ asset('template/js/custom.js') }}" defer></script>
    <script src="{{ asset('template/js/isotope.min.js') }}" defer></script>
    <script src="{{ asset('template/js/owl-carousel.js') }}" defer></script>
    <script src="{{ asset('template/js/popup.js') }}" defer></script>
    <script src="{{ asset('template/js/tabs.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('site/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/templatemo-cyborg-gaming.css') }}" rel="stylesheet">

    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.min.js') }}" defer></script>

</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="{{ asset('template/images/logo_oficial.png') }}" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

   <!-- ***** Body Login Start ***** -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <div id="app">
                        <main class="py-4">
                            @yield('content')
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ***** Body Login End ***** -->

</body>

</html>
