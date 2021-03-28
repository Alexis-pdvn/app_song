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

        <div class="resetMain">
            <div id="containerReset">
                <a href="/login" class="resetMain__back">
                    <img src="/images/icons/left-arrow.png" alt="Left arrow icon">
                    <p>Back</p>
                </a>

                <p class="resetMain__title">Reset your pas<span> sword</span></p>

                <div>
                    @if (session('status'))
                        <div role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div>
                            <input id="email" placeholder="Your e-mail address" type="email" class="resetMain__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="btn-blue">
                                {{ __('Send password reset link') }}
                            </button>
                        </div>
                    </form>
                </div>
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