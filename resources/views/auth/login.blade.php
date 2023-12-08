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

                                    <div class="col-sm-12">
                                        <form id="contact-form" action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="section-heading">
                                                        <h2><span>{{ __('Login') }}</span></h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <fieldset>
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
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
                                                            placeholder="Password...">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </fieldset>
                                                </div>

                                                <div class="col-lg-2">
                                                    <!-- Use uma coluna de 12 para ocupar a largura total da linha -->
                                                    <fieldset>
                                                        <label for="lembrar-me" class="d-flex align-items-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                name="remember" id="remember"
                                                                {{ old('remember') ? 'checked' : '' }}>
                                                            <p class="ms-3">Lembrar</p>
                                                        </label>
                                                    </fieldset>
                                                </div>

                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" class="orange-button">
                                                            {{ __('Login') }}
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
