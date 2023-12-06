@extends('layouts.app')


@section('content')
    <div class="infos" id="infos">
        <div class="container">
            <div class="contact-us " id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-us-content d-flex align-items-center">
                                <div class="row">

                                    <div class="col-lg-12 mx-auto">


                                        <div class="card-body">
                                            @if (session('resent'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ __('Um novo link de verificação foi enviado para seu endereço de e-mail.') }}
                                                </div>
                                            @endif

                                            {{ __('Antes de continuar, verifique se há um link de verificação em seu e-mail.') }}
                                            {{ __('Se você não recebeu o e-mail') }},
                                            <form class="d-inline" method="POST"
                                                action="{{ route('verification.resend') }}">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-link p-0 m-0 align-baseline">{{ __('clique aqui para solicitar outro') }}</button>.
                                            </form>
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
@endsection
