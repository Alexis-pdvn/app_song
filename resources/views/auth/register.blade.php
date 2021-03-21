@extends('templates.general')

@section('contenu')
<div class="loginMain">

    <div class="registerLeft">
        <div id="containerRegister">
            <div class="registerLeft__title">
                <h1 class="registerLeft__title-title">Register</h1>
                <div class="registerLeft__title-special"></div>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Div pour la partie nom -->
                <div>
                    <input id="name" Placeholder="Name" type="text" class="registerLeft__form-input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Div pour la partie email -->
                <div>
                    <input id="email" Placeholder="E-mail" type="email" class="registerLeft__form-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Div pour la partie mot de passe -->
                <div>
                    <input id="password" Placeholder="Password" type="password" class="registerLeft__form-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            
                <!-- Div pour la partie confirmation du mot de passe -->
                <div>
                    <input id="password-confirm" class="registerLeft__form-input" Placeholder="Confirm your password" type="password" name="password_confirmation" required autocomplete="new-password">
                </div>

                <!-- Bouton de validation -->
                <button type="submit" class="registerLeft__button">
                    {{ __('Register') }}
                </button>
            </form>

            <p id="accountText">You already have a account ?<a href="/login" id="accountLink">Click here</a></p>
        </div>
    </div>

    <div class="loginLeft">
        <video class="loginLeft__video" src="/videos/logo_png.mp4" autoplay></video>
    </div>
</div>
@endsection