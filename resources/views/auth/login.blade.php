@extends('layouts.app')

@section('content')




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="{{asset('css/LoginP.css')}}">
    <title>Login </title>
</head>
<body>
    <div class="fondo">
        <div class="contenedor">
            
            <form method="POST" class="Formp" action="{{ route('login') }}">
                <div class="Ti">{{ __('Administrador') }}</div>
                @csrf

                <div>
                    <label for="email" class="Co">{{ __('Correo') }}</label> 
                        <div >
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div>
                            <label for="password" class="Co">{{ __('Contraseña') }}</label>
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
    
                            <div class="conteE">
                                <div>
                                    <button type="submit" class="css-button-shadow-border-sliding--black">
                                        {{ __('Entrar') }}
                                    </button>
                                    <div class="ConteneO">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Olvidaste tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


