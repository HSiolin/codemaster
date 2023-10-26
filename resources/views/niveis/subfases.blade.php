@extends('layouts.app')

@section('content')
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2 text-center">
                <a type="button" href="{{ route('subfases_logica', ['nivel' => 'facil']) }}" class="start-button mb-3">Lógica - Fácil</a>
                <a type="button" href="{{ route('subfases_logica', ['nivel' => 'medio']) }}" class="start-button mb-3">Lógica - Médio</a>
                <a type="button" href="{{ route('subfases_logica', ['nivel' => 'dificil']) }}" class="start-button mb-3">Lógica - Difícil</a>
            </div>
        </div>
    </div>
@endsection
