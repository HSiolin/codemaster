@extends('layouts.app')

@section('content')
    <div class="infos section" id="infos">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 text-center">
                    <a type="button" href="{{ route('css.create', ['nivel' => 'facil']) }}"
                        class="start-button mb-3">Fácil</a>
                    <a type="button" href="{{ route('css.create', ['nivel' => 'medio']) }}"
                        class="start-button mb-3">Médio</a>
                    <a type="button" href="{{ route('css.create', ['nivel' => 'dificil']) }}"
                        class="start-button mb-3">Difícil</a>
                </div>
            </div>
        </div>
    </div>
@endsection
