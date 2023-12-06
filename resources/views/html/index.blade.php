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
                                <h3 class="text-center">Avaliação das Questões de HTML</h3>
                                <div class="line-dec"></div>
                                 @if ($contador >= 4)
                                    {{-- Use '==' for comparison --}}
                                    <div class="text-center"> {{-- Corrected indentation --}}
                                        <div class="alert alert-success" role="alert">
                                            <h5>Parabéns, você acertou {{ $contador }} perguntas!</h5>
                                        </div>
                                        <div class="line-dec"></div>
                                        <h5>Respostas</h5>
                                        <div class="line-dec"></div>
                                        @foreach ($respostas_corretas as $value)
                                            <ul>
                                                <li class="list-group-item">{{ $value }}</li>
                                                <hr>
                                            </ul>
                                        @endforeach

                                        <br>
                                        <div class="line-dec"></div>

                                        <a type="button" class="btn btn-outline-success"
                                            href="{{ route('subfases_logica') }}">Continuar</a>

                                        <a type="button" class="btn btn-outline-secondary"
                                            href="{{ route('fases') }}">Próxima fase</a>

                                    </div>
                                @else
                                    <div class="alert alert-danger" role="alert">
                                        <h5>Infelizmente, você acertou somente {{ $contador }} perguntas! faça
                                            novamente!</h5>
                                    </div>
                                    <div class="line-dec"></div>
                                    <br>
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
