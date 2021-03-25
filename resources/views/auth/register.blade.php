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
        <video autoplay loop preload="auto">
            <source  src="/video/barrel.mp4" type="video/mp4">
        </video>
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
