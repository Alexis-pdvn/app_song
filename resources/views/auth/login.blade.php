@extends('templates.general')

@section('contenu')
        <div class="loginMain">
            <div class="loginLeft">
                <video class="loginLeft__video" src="/videos/logo_png.mp4" autoplay></video>
            </div>

            <div class="loginRight">
                <div id="containerLogin">
                    <div class="loginRight__title">
                        <h1 class="loginRight__title-title">Login</h1>
                        <div class="loginRight__title-special"></div>
                    </div>

                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Div pour la partie email -->
                            <div>
                                <input id="email" Placeholder="E-mail" type="email" class="loginRight__form-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Div pour la partie mot de passe -->
                            
                            <div>
                                <input id="password" Placeholder="Password" type="password" class="loginRight__form-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <!-- Div pour la partie Remember -->
                            <div class="loginRight__remember">
                                <input class="loginRight__remember-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="loginRight__remember-text" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <!-- Div pour le bouton et oublie mdp -->
                            <div>
                                <button type="submit" class="loginRight__button">
                                    {{ __('Connection') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password ?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>

                    <p id="accountText">You don't have a account yet ?<a href="/register" id="accountLink">Click here</a></p>
                </div>
            </div>
        </div>

@endsection
