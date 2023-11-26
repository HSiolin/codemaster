@extends('layouts.app')

@section('content')
    <!-- ***** Top 3 start ***** -->

    <div class="question section" id="question">

        <div class="row">
            <div class="col-lg-12">
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="section-heading">
                                <h3 class="text-center">Feedback Questions HTML</h3>
                                <div class="line-dec"></div>
                                @if ($dados > 2)
                                    <div class ="text-center">
                                        <div class="alert alert-success" role="alert">
                                            <h5>Parabéns você acertou {{ $dados }} perguntas!</h5>
                                        </div>
                                        <div class="line-dec"></div>
                                        <h5>Respostas</h5>
                                        <br>
                                        <ul>
                                            <li class="list-group-item">Respostas corretas aqui</li>
                                            <hr>
                                            <li class="list-group-item">A second item</li>
                                            <hr>
                                        </ul>
                                        <br>
                                        <div class="line-dec"></div>
                                        <a type="button" class="btn btn-outline-success"
                                            href="{{ route('subfases_html') }}">Continuar</a>
                                    </div>
                                @else
                                    <div class="alert alert-danger" role="alert">
                                        <h5>Infelizmente você só acertou {{ $contador_acertos }} perguntas!</h5>
                                    </div>
                                    <div class="line-dec"></div>
                                    <h5>Respostas</h5>
                                    <br>
                                    <ul>
                                        <li class="list-group-item">Respostas corretas aqui</li>
                                        <hr>
                                        <li class="list-group-item">A second item</li>
                                        <hr>
                                    </ul>
                                    <br>
                                    <div class="line-dec"></div>
                                    <a type="button" class="btn btn-outline-danger"
                                        href="{{ route('fases') }}">Retornar</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
