@extends('layouts.app')

@section('content')
    <div class="container-play">
        <div class="play">
            <img src="{{ asset('template/assets/images/logostart.png') }}" alt="">
        </div>
        <div class="button-play">
            <a type="button" class="btn rounded-circle btn-lg" href="{{ route('fases') }}">
                <i class="far fa-play-circle" style="color: #ffffff; font-size: 90px;"></i>
            </a>
        </div>
    </div>
@endsection
