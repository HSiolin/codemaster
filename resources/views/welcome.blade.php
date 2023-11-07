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
                            <li class="scroll-to-section"><a href="#top" class="active">Início</a></li>
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
    <!-- ***** Container inicio jogo Start ***** -->
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="caption header-text">
                        <h6>CODEMASTER - Quiz em Programação</h6>
                        <div class="line-dec"></div>
                        <h4><em>Bem-vindo</em> ao <span> CODEMASTER</span></h4>
                        <p>Um jogo Web sobre programação! Prepare-se para mergulhar em um mundo de códigos malucos e
                            desafios emocionantes.
                            Aventure-se conosco e mostre suas habilidades de programação enquanto se diverte.
                            Que os bugs fujam do seu código e a diversão esteja sempre presente!
                            Se já estiver cadastrado inicie o jogo, caso não, se cadastre.
                        <div class="main-button scroll-to-section"><a href="{{ route('login') }}">Jogar Agora</a></div>
                        <span>ou</span>
                        <div class="main-button scroll-to-section"><a href="{{ route('register') }}">Cadastre-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Container inicio jogo End ***** -->
    <!-- ***** Tendências Start ***** -->
    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h2><span>Tendências <em>&</em> Novidades </span><em> no mundo da</em>
                                    <span>Programação</span>
                                </h2>
                                <div class="line-dec"></div>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                
                                <h4>Jogos em Alta na Indústria</h4>
                                  <hr>
                                <div class="main-button scroll-to-section"><a href="{{ route('jogos') }}">Saiba
                                        mais</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                
                                <h4>Tendências em Desenvolvimento Web</h4>
                                <hr>
                                <div class="main-button scroll-to-section"><a href="{{ route('tendencias') }}">Saiba
                                        mais</a></div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                
                                <h4>Novidades da Linguagens de Programação</h4>
                                <hr>
                                <div class="main-button scroll-to-section"><a href="{{ route('linguagens') }}">Saiba
                                        mais</a></div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                              
                                <h4>Inteligência Artificial em Jogos</h4><br>
                                <hr>
                                <div class="main-button scroll-to-section"><a href="{{ route('ias') }}">Saiba
                                        mais</a></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Tendências end ***** -->
    <!-- ***** Rank semanal start ***** -->
    <div class="projects section" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2> <em>Rank </em>da <span>semana</span></h2>
                        <div class="line-dec"></div>
                        <p>Explore os destaques do nosso 'Ranking Semanal' e descubra quais jogadores estão dominando os
                            placares nesta semana emocionante.
                            Veja quem está no topo da competição e acompanhe as tendências em constante evolução do
                            CodeMaster.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-features owl-carousel">
                        <div class="item">
                            <img src="assets/images/projects-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Digital Agency HTML Templates</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/projects-02.jpg" alt="">
                            <div class="down-content">
                                <h4>Admin Dashboard CSS Templates</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/projects-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Best Responsive Website Layouts</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/projects-04.jpg" alt="">
                            <div class="down-content">
                                <h4>HTML CSS Layouts for your websites</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/projects-02.jpg" alt="">
                            <div class="down-content">
                                <h4>Bootstrap 5 Themes for Free</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/projects-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Mobile Friendly Website Layouts</h4>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Rank semanal end ***** -->
    <!-- ***** Top 3 start ***** -->
  <div class="infos section" id="infos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="assets/images/modelo5.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2> <em>Como Jogar </em>  <span>CODEMASTER? </span></h2>
                  <div class="line-dec"></div>
                  <p>Aqui estão as instruções para jogar nosso incrível jogo de quiz:</p>
                </div>
                <div class="skills">
                  <div class="skill-slide marketing">
                    <div class="fill"></div>
                    <h6>1. Registre-se ou Faça Login</h6>
                    <p>Comece criando uma conta ou fazendo login se você já tiver uma.</p>
                  </div>
                  <div class="skill-slide digital">
                    <div class="fill"></div>
                    <h6>Escolha um Quiz</h6>
                    <p>Navegue pela nossa seleção de quizzes e escolha o que te interessa.</p>
                  </div>
                  <div class="skill-slide media">
                    <div class="fill"></div>
                    <h6>Responda às Perguntas</h6>
                    <p>Escolha uma alternativa correta do quiz com cuidado e rapidez.</p>
                  </div>
                </div>
                <p class="more-info">É isso! Você está pronto para começar sua jornada no mundo dos quizzes. 
                  Desafie seus amigos, ganhe prêmios e divirta-se ao máximo.</p>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
