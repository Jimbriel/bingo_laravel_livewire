@extends('layouts.app')

@section('content')
    @if (session ('info'))
      <div class="container">
        <div class="row">
          <div class="col">
             <div class="alert alert-danger" role="alert">
               <strong>{{session ('info')}}</strong>
             </div>
          </div>
        </div>
      </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Iniciar sesión con su cuenta') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input float-md-left" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label mr-5" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>

                                    <button type="submit" class="btn btn-primary ml-4 float-md-right">
                                    <i class="fas fa-sign-in-alt"></i>    {{ __('Iniciar Sesión') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                             <div class="col-md-6 offset-md-4 mx-auto">
                                <a href="{{url('login/facebook')}}" class="btn btn-block btn-primary "><i class="bi bi-facebook"></i> Inicia sesión con Facebook</a>
                                <a href="{{url('login/google')}}" class="btn btn-block  btn-danger "><i class="bi bi-google"></i> Inicia sesión con Google</a>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{-- <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button> --}}

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidó su contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                       {{--  <p class="mt-3 mb-2 text-center lead">-O-</p>

                        <a href="" class="btn btn-block btn-primary">Inicia sesión con Facebook</a>
                        <a href="" class="btn btn-block btn-danger">Inicia sesión con Google</a> --}}

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
