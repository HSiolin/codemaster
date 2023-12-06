@extends('layouts.login')

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
                                        <form id="contact-form" action="{{ route('password.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="token" value="{{ $token }}">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="section-heading">
                                                        <h2><span>{{ __('Redefinir senha') }}</span></h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <fieldset>
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ $email ?? old('email') }}" required
                                                            autocomplete="email" autofocus placeholder="E-mail...">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-6">
                                                    <fieldset>
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="current-password"
                                                            placeholder="Senha...">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </fieldset>
                                                </div>

                                                <div class="col-lg-6">
                                                    <fieldset>
                                                        <input id="password-confirm" type="password" class="form-control"
                                                            name="password_confirmation" required
                                                            autocomplete="current-password"
                                                            placeholder="Confirmar senha...">

                                                    </fieldset>
                                                </div>


                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" class="orange-button">
                                                            {{ __('Redefinir senha') }}
                                                        </button>
                                                    </fieldset>
                                                </div>

                                            </div>
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
@endsection