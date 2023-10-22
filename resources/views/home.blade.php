@extends('layouts.app')

@section('content')
    <div class="container-play">
        <div class="play">
            <img src="{{ asset('template/assets/images/startdojogo.png') }}" alt="">
        </div>
        <div class="button-play">
          <a type="button" class="btn rounded-circle" href="{{ route('fases.index')  }}">
            <i class="far fa-play-circle" style="color: #ffffff; font-size: 60px;"></i>
          </a>
        </div>
    </div>

@endsection
