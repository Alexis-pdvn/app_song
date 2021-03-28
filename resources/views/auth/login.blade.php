<!DOCTYPE html>
<html lang="en">
<head>
    <title>MMI'SOUND - Login</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pictures, laravel">
    <meta name="keywords" content="Pictures, laravel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/public/imgages/favicon.ico" rel="shortcut icon" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="icon" href="/images/icons/icon.png"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" />

    <link rel="stylesheet" href="/sass/main.css"/>
    <link rel="stylesheet" href="/sass/main.css.map"/>

    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.pjax.js"></script>
</head>

<header>
</header>

<body>
    
<div class="loginMain">
            <div class="loginLeft">
                <video autoplay loop preload="auto">
                    <source  src="/video/barrel.mp4" type="video/mp4">
                </video>
            </div>

            <div class="loginRight">
                <div id="containerLogin">
                    <a href="/" class="resetMain__back" id="loginBack">
                        <img src="/images/icons/left-arrow.png" alt="Left arrow icon">
                        <p>Back</p>
                    </a>
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


<script src="/js/bootstrap.min.js"></script>
<script src="/js/mixitup.min.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/divers.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>