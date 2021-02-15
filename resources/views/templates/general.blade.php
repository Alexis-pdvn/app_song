<!DOCTYPE html>
<html lang="en">
<head>
    <title>Riddle - Portfolio Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pictures, laravel">
    <meta name="keywords" content="Pictures, laravel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/public/imgages/favicon.ico" rel="shortcut icon" />

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>



<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <div class="logo">
                    <h2 class="site-logo">Superbe Plateforme de Musique</h2>
                </div>
            </div>
            <div class="col-lg-8 col-md-9">
                <a href="" class="site-btn header-btn">Get in touch</a>
                <nav class="main-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        
                        <li><a href="/about">About</a></li>
                        <li>
                            <form id="search" method="get" action="/search">
                                <input type="text" name="search" Placeholder="Rechercher">
                                <input type="submit" Value="Go">
                            </form>
                        </li>
                        <li><a href="/article/1">Work</a></li>
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li><a href="/songs/create">New</a></li>
                            <li class="nav-item dropdown">
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
                               
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
</header>

<div>
    @yield('contenu')
    <audio controls id="audio">
</div>


<footer class="footer-section text-center">
    <div class="container">
            <div class="social-links">
                <a href=""><span class="fa fa-pinterest"></span></a>
                <a href=""><span class="fa fa-linkedin"></span></a>
                <a href=""><span class="fa fa-instagram"></span></a>
                <a href=""><span class="fa fa-facebook"></span></a>
                <a href=""><span class="fa fa-twitter"></span></a>
            </div>
        <div class="copyright">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
            <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </div>
    </div>
</footer>


<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/mixitup.min.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/jquery.js"></script>
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

