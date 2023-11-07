@extends('layouts.header')
@section('content')


 <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 align-self-center">
                    <div class="caption  header-text">
                        <h6>FAQ - CodeMaster</h6>
                        <div class="line-dec"></div>
                        <h4><span>Perguntas Frequentes</span></h4>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('template/assets/images/faqs-image.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="most-asked section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2><em>Perguntas Mais Frequentes</em></h2>
                        <div class="line-dec"></div>
                        <p class="text-center">Aqui estão algumas perguntas frequentes sobre o nosso jogo de quiz de programação:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Como posso começar a jogar o CodeMaster - Quiz de Programação?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                  <p>Para começar a jogar o CodeMaster, basta se cadastrar em nossa plataforma e escolher um dos quizzes disponíveis. Nosso jogo abrange temas como lógica de programação, HTML e CSS. Cada quiz possui várias fases emocionantes que desafiarão suas habilidades. Depois, você pode selecionar o quiz desejado e começar a responder às perguntas.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Como são pontuadas as respostas corretas?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Cada resposta correta no CodeMaster é pontuada com 10 pontos. As respostas erradas não recebem pontos.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordions">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>O CodeMaster - Quiz de Programação é gratuito?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Sim, o CodeMaster é completamente gratuito. Você pode jogar quantas vezes quiser sem nenhum custo.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Posso jogar o CodeMaster - Quiz de Programação em dispositivos móveis?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Sim, o nosso jogo CodeMaster é um jogo de quiz online projetado para ser jogado diretamente no seu navegador. É acessível em dispositivos móveis, como smartphones e tablets, proporcionando uma experiência de jogo perfeita em qualquer lugar que você esteja</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                      <div class="accordions is-first-expanded">
                          <!-- O seu conteúdo de FAQ existente vai aqui -->
                      </div>
                  </div>
                 
              </div>              
            </div>
        </div>
    </div>
   <!-- ***** Contact start ***** -->

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
                                                <h2><em>FALE</em> <span>CONOSCO</span></h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name"
                                                    placeholder="Nome..." autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="surname" name="surname" id="surname"
                                                    placeholder="Sobrenome..." autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="text" name="email" id="email"
                                                    pattern="[^ @]*@[^ @]*" placeholder="E-mail..." required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="subject" name="subject" id="subject"
                                                    placeholder="Assunto..." autocomplete="on">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" id="message" placeholder="Mensagem"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="orange-button">Enviar
                                                    mensagem</button>
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
                                                <h4><a href="mailto:codemaster.quiz@gmail.com">codemaster.quiz@gmail.com</a></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-item">
                                                <i class="fa fa-map-marker"></i>
                                                <h4><a href="#">704/904 Seps Eq 702/902, Brasília - DF,
                                                        70390-045</a></h4>
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
    <!-- ***** Contact end ***** -->


@endsection
