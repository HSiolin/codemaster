<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <title>CodeMaster</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template/assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/templatemo-tale-seo-agency.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/animate.css') }}" rel="stylesheet">

    <!--F

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Pre-Header Area Start ***** -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-9">
                    <div class="left-info">
                        <ul>
                            <li><a href="#"><i class="fa fa-phone"></i>+000 1234 5678</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>infocompany@email.com</a></li>
                            <li><a href="#"><i class="fa fa-map-marker"></i>St. London 54th Bull</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-3">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Pre-Header Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="{{ asset('template/assets/images/logo.png') }}" alt=""
                                style="width: 350px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->

                        <ul class="nav">

                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banners" id="top">
        <div class="container-fluid">
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
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2023 <a href="#">CodeMaster</a>. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.min.js') }}" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('template/assets/js/isotope.min.js') }}" defer></script>
    <script src="{{ asset('template/assets/js/owl-carousel.js') }}" defer></script>
    <script src="{{ asset('template/assets/js/popup.js') }}" defer></script>
    <script src="{{ asset('template/assets/js/custom.js') }}" defer></script>

</body>

</html>