@extends('layouts.login')


@section('content')
    <div class="container">
        <div class="contact-us " id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-us-content d-flex align-items-center">
                            <div class="row">

                                <div class="col-lg-12 mx-auto">
                                    <form id="contact-form" action="{{ route('password.confirm') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-heading">
                                                    <h2><span>{{ __('Confirmar Senha') }}</span></h2>
                                                    {{ __('Por favor confime sua senha antes de continuar.') }}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <fieldset>
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" value="{{ old('password') }}" required
                                                        autocomplete="password" autofocus placeholder="Senha...">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </fieldset>
                                            </div>



                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" class="orange-button">
                                                        {{ __('Confirmar senha') }}
                                                    </button>

                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
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
