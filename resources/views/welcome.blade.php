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
                            <li><a href="#"><i class="fa fa-phone"></i>+000 1234 5678</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>vanessa.vane.nessa.vs@email.com</a></li>
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
    <!-- ***** Pre-Cabeçalho Area End ***** -->

    <!-- ***** Cabeçalho Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="{{ asset('template/assets/images/logo.png') }}" alt="" style="width: 350px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Início</a></li>
                          <li class="scroll-to-section"><a href="#services">Notícias da semana</a></li>
                          <li class="scroll-to-section"><a href="#projects">Rank</a></li>
                          <li class="scroll-to-section"><a href="faqs.html">FAQ</a></li>
                          <li class="scroll-to-section"><a href="#contact">Contatos</a></li>
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
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>CODEMASTER - Quiz em Programação</h6>
            <div class="line-dec"></div>
            <h4><em>Bem-vindo</em> ao <span> CODEMASTER</span></h4>
            <p>Um jogo sobre programação web! Prepare-se para mergulhar em um mundo de códigos malucos e desafios emocionantes. 
              Aventure-se conosco e mostre suas habilidades de programação enquanto se diverte.
               Que os bugs fujam do seu código e a diversão esteja sempre presente! 
            <div class="main-button scroll-to-section"><a href="{{ route('login') }}">Jogar Agora</a></div>
            <span>ou</span>
            <div class="main-button scroll-to-section"><a href="{{ route('register') }}">Cadastre-se</a></div>
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
                <h2>Tendências & Novidades <p></p><em> no mundo da</em> 
                  <span>Programação</span>
                </h2>
                <div class="line-dec"></div>
                <p></p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-01.jpg" alt="discover SEO" class="templatemo-feature">
                </div>
                <h4>Jogos em Alta na Indústria</h4>
                <p>Jogos Aguardados para 2023!Explore as surpresas que o futuro dos jogos reserva ao mergulhar em uma seleção épica dos títulos mais aguardados deste ano. Prepare-se para aventuras marcantes, gráficos impressionantes e narrativas envolventes que prometem revolucionar a experiência de jogar.</p>
                <a class="news-link" href="jogosemalta.html">Saiba mais</a>
                  </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-02.jpg" alt="data analysis" class="templatemo-feature">
                </div>
                <h4>Tendências em Desenvolvimento Web</h4>
                <p>Explorando Inovações: Moldando Programação e Jogos em 2023. Das tecnologias emergentes às abordagens revolucionárias, descubra as tendências definindo o futuro da indústria e preparando terreno para a próxima geração de criatividade e excelência.</p>
                <a class="news-link" href="tedenciasweb.html">Saiba mais</a>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-03.jpg" alt="precise data" class="templatemo-feature">
                </div>
                <h4>Novidades da Linguagens de Programação</h4>
                <p>Desbravando Novas Fronteiras: Linguagens de Programação em 2023! Descubra o mundo das codificações 
                  revolucionárias e as linguagens que transformam a criação de soluções. Das bases sólidas às oportunidades 
                  ilimitadas, explore as ferramentas que moldam o futuro da programação.</p>
                <a class="news-link" href="linguagensemalta.html">Saiba mais</a>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-04.jpg" alt="SEO marketing" class="templatemo-feature">
                </div>
                <h4>Inteligência Artificial em Jogos</h4>
                <p>Revolução da IA nos Jogos: Inovações do ano! Explore como a inteligência artificial está transformando 
                  a indústria de jogos, melhorando a jogabilidade, gráficos e interações. Descubra as tendências que estão 
                  moldando o futuro dos jogos e preparando o terreno para uma nova era de experiências envolventes.</p>
                <a class="news-link" href="iaemjogos.html">Saiba mais</a>
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
            <h2>  <em>Rank </em>da <span>semana</span></h2>
            <div class="line-dec"></div>
            <p>Explore os destaques do nosso 'Ranking Semanal' e descubra quais jogadores estão dominando os placares nesta semana emocionante. 
              Veja quem está no topo da competição e acompanhe as tendências em constante evolução do CodeMaster.</p>
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
                  <img src="assets/images/left-infos.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2>Rank <em>top 3</em> da <span>Semana</span></h2>
                  <div class="line-dec"></div>
                  <p>Parabéns aos jogadores extraordinários que conquistaram o Top 3 de pontuações! 
                    Vocês são verdadeiros campeões e estão no auge da excelência. 
                    Continue alcançando novos patamares e inspirando a todos nós com suas habilidades incríveis!</p>
                </div>
                <div class="skills">
                  <div class="skill-slide marketing">
                    <div class="fill"></div>
                    <h6>Primeiro lugar</h6>
                    <span>pontuação</span>
                  </div>
                  <div class="skill-slide digital">
                    <div class="fill"></div>
                    <h6>Segundo lugar</h6>
                    <span>pontuação</span>
                  </div>
                  <div class="skill-slide media">
                    <div class="fill"></div>
                    <h6>Terceiro lugar</h6>
                    <span>pontuação</span>
                  </div>
                </div>
                <p class="more-info">Suas conquistas demonstram dedicação e habilidade excepcionais. 
                  Que essa posição no Top 3 seja apenas o começo de uma jornada repleta de sucesso e realizações no nosso jogo. 
                  Continue desafiando seus limites pois você vai longe!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- ***** top 3 end ***** -->
   <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content d-flex align-items-center">
            <div class="row">
             
              <div class="col-lg-12 mx-auto">
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>Contact Us</em> &amp; Get In <span>Touch</span></h2>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Nome..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="Sobrenome..."
                          autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail..."
                          required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Assunto..." autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="Mensagem"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Enviar mensagem</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4><a href="#">010-020-0340</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4><a href="#">vanessa.vane.nessa.vs@email.com</a></h4>
                        <h4><a href="#">hello@company.com</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4><a href="#">704/904 Seps Eq 702/902, Brasília - DF, 70390-045</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2023 <a href="#">CodeMaster</a>.x</p>
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