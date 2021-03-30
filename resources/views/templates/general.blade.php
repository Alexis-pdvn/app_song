<!DOCTYPE html>
<html lang="en">
<head>
    <title>SOUNDROP</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pictures, laravel">
    <meta name="keywords" content="Pictures, laravel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="icon" href="/images/icons/icon.png"/>

    <!--<link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css"/>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" />

    <link rel="stylesheet" href="/sass/main.css"/>
    <link rel="stylesheet" href="/sass/main.css.map"/>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.pjax.js"></script>
</head>

<header class="header_section container">

    <a href="/" class="header_section_logo">soundrop</a>

<!-- Formulaire de recherche -->
    <form class="header_section_formulaire" id="search" method="get" action="/search">
        <input class="input-text" type="text" name="search" Placeholder="Research here an artist or a music">
        <button type="submit">
            <img src="/images/icons/loupe.png" alt="Icone loupe">
        </button>
    </form>


<!-- Div de la navigation -->
    <div class="header_setion_nav">

        <div class="header_section_nav_icon">

                @guest
                    @if (Route::has('login'))
                            <a class="login_hover" href="{{ route('login') }}">{{ __('Log in') }}</a>
                    @endif
                    
                    @if (Route::has('register'))
                            <a class="register_hover" href="{{ route('register') }}">{{ __('Create an account') }}</a>
                    @endif
                @else

        <!-- Div avec les icones -->
            <div class="header_section_nav_i">
                <i class="react_hover far fa-user-circle"></i>
                <i class="react_hover fas fa-chevron-down"></i>
            </div>
        
        <!-- Les liens de nav -->
            <nav class="header_section_nav_icon_a">
            
                        
                        <a class="hover_menu" href="/">Home</a>
                        <a class="hover_menu" href="/utilisateur/{{ Auth::user()->id }}">My Account</a>
                        <a class="hover_menu" href="/songs/create">Upload</a>
                        <a class="hover_menu" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                @endguest
                
                <!--@guest
                            @if (Route::has('login'))
                                    <a href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            @endif
                            
                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
                            @endif
                        @else
                        <a href="/songs/create">Déposer une musique</a>
                        <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                @endguest-->
            </nav>

        </div>
        
    </div>
</header>

<body>
    
<div id="pjax-container">
    @yield('contenu')
</div>

<div class="audio_div">
    <audio controls name="audio" id="audio">
</div> 

<div class="playerMain">
    <div class="container playerMain__div">
        <div class="buttons playerMain__button">
            <!-- <button id="pre"><img src="/images/icons/previous_button.png"></button> -->
            <button id="play"><img id="play_img" src="/images/icons/play_button.png"></button>
            <!-- <button id="next"><img src="/images/icons/next_button.png"></button> -->
        </div>
        <div>
            <input id="timeRange" name="audio" class="playerMain__timer" type="range" value="0" min="0"> 
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

var audio = document.getElementById("audio");
audio.volume = 0.5;


  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
  
</script>
</body>
</html>