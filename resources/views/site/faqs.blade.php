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



@endsection
