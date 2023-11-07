<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <title>Welcome - CODEMASTER</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Adicional CSS Files -->
    <link href="{{ asset('template/assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/style-site.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/botao-fundo.css') }}" rel="stylesheet">


    <style>
        .section {
            background-color: #f9f9f9;
            padding: 50px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-heading {
            text-align: center;
        }

        .section-heading h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .line-dec {
            width: 50px;
            height: 2px;
            background-color: #333333;
            margin: 0 auto 20px;
        }

        h3 {
            color: #6b11e0;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #333;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        td {
            color: #5c5b5b;
        }

        th {
            background-color: #6b11e0;
            color: #fff;
        }

        p {
            text-align: justify;
        }
    </style>

</head>

<body>

    <!-- ***** Pré-carregador Start ***** -->
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
    <!-- ***** Pré-carregador End ***** -->

    <!-- ***** Pré-Cabeçalho Area Start ***** -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-9">
                    <div class="left-info">
                        <ul>
                            <li><a href="#"><i class="fa fa-phone"></i></a></li>
                            <li><a href="mailto:codemaster.quiz@gmail.com"><i class="fa fa-envelope"></i>E-mail</a></li>
                            <li><a href="#"><i class="fa fa-map-marker"></i>Brasilia DF</a></li>
                            <li>
                                <input type="checkbox" class="checkbox" id="chk">
                                <label class="labelchk" for="chk">
                                    <i class="fa-regular fa-sun"></i>
                                    <i class="fa-regular fa-moon"></i>
                                    <div class="ball"></div>
                                </label>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-3">
                    <div class="social-icons">
                        <ul>
                            <li><a href="/laravel/tcc/jogo/public/admin"><i class="fa-solid fa-user"></i></a></li>
                            <li><a href="https://www.instagram.com/codemaster.quiz/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/codemaster_quiz"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/codemaster-quiz-278519299/"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Pre-Cabeçalho Area End ***** -->

    <!-- ***** Cabeçalho Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="{{ asset('template/assets/images/logo.png') }}" alt=""
                                style="width: 340px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('welcome')}}" class="active">Início</a></li>
                            <li class="scroll-to-section"><a href="#services">Notícias da semana</a></li>
                            <li class="scroll-to-section"><a href="#projects">Rank</a></li>
                            <li class="scroll-to-section"><a href="#infos">Como jogar</a></li>
                            <li class="scroll-to-section"><a href="{{ route('faqs') }}">FAQ</a></li>
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
    <!-- ***** Cabeçalho Area End ***** -->

    <!-- ***** Rank semanal start ***** -->
    <div class="projects section" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ***** Rank semanal end ***** -->


    <!-- ***** top 3 end ***** -->
    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2023 <a href="#">CodeMaster</a></p>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.min.js') }}" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('template/assets/js/button.js') }}" defer></script>
    <script src="{{ asset('template/assets/js/isotope.min.js') }}" defer></script>
    <script src="{{ asset('template/assets/js/owl-carousel.js') }}" defer></script>
    <script src="{{ asset('template/assets/js/popup.js') }}" defer></script>
    <script src="{{ asset('template/assets/js/custom.js') }}" defer></script>
    <script src="{{ asset('template/assets/js/tabs.js') }}" defer></script>

</body>

</html>
