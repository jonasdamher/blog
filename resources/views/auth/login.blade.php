@extends('web.layouts.app-min')

@section('css')
<link href="{{ asset(mix('css/web/page/login.css')) }}" rel="stylesheet">
@endsection

@section('content')
<div class="container container-login">
    <div class="row justify-content-center">
        <div class="col-md-5 col-xl-4 col-xxl-3">
            <div class="card">

                <div class="card-body">
                    <h2 class="card-title text-center pb-2">Iniciar sesión</h2>

                    <form method="POST" action="{{ route('login') }}" class="d-flex f-column">
                        @csrf

                        <div class="d-flex f-column form-content">
                            <label for="email" class="">Correo electrónico</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="false" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="d-flex f-column form-content">
                            <label for="password" class=" ">{{ __('Contraseña') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="false">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="">
                            <div class="d-flex justify-content-end">
                                <div class="">
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="" for="remember">
                                        {{ __('Recordar sesión') }}
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="py-1">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Iniciar sesión') }}
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                        <a class="link-primary" href="{{ route('password.request') }}">
                            ¿Olvidaste la contraseña?
                        </a>
                        @endif


                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection