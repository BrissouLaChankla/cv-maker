@extends('layouts.app')
<div class="login-to-home">
    <a data-no-swup class="text-decoration-none text-dark" href="{{route('front')}}">
        <i class="fas fa-arrow-alt-circle-left"></i>
        Revenir au site
    </a>
</div>
<div class="h-100 bg-light d-flex align-items-center justify-content-center">
    <div class="container h-75 ">
        <div class="row rounded shadow overflow-hidden -content-cjustifyenter h-100">
            <div class="col-md-7" style="background-image:url('/storage/common/background.webp');background-size: cover;
            background-position: center;">
            </div>
            <div class="col-md-5 p-5 bg-light d-flex flex-column justify-content-center">
                    <h3 class="text-center">{{ __('Pannel administrateur') }}</h3>

                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <input id="email" type="email" class="py-4 mt-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                            


                            <input id="password" type="password" class="mt-3 py-4 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                            <div class="form-group row align-items-center">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Se souvenir de moi') }}
                                        </label>
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                <div class="col-md-6 text-right">
                                    <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                        {{ __('Mdp oublié ?') }}
                                    </a>
                                </div>
                            @endif
                            </div>

                                    <button type="submit" class="btn w-100 btn-primary">
                                        {{ __('Se connecter') }}
                                    </button>

                                
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>