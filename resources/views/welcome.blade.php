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

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <!-- ***** Logo Start ***** -->
                        <li><a href="#" class="logo">
                                <img src="{{ asset('template/images/logo_oficial.png') }}" alt="">
                            </a></li>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">

                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="#">Notícias</a></li>
                            <li><a href="#">Detalhes</a></li>
                            <li>
                                <div class="main-button">
                                    <a href="{{ route('register') }}">Cadastrar</a>
                                </div>
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

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Bem vindo ao CodeMaster</h6>
                                    <h4><em>Jogo</em> Desenvolvido para aprender programação</h4>
                                    <div class="main-button">
                                        <a href="{{ route('login') }}">Jogue Agora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->


                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright ©2023 <a href="#">CodeMaster Gaming</a> Company. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
