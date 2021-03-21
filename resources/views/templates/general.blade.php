<!DOCTYPE html>
<html lang="en">
<head>
    <title>MMI'SOUND</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pictures, laravel">
    <meta name="keywords" content="Pictures, laravel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/public/imgages/favicon.ico" rel="shortcut icon" />

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
<body>



<div id="pjax-container">
    @yield('contenu')
</div>

<audio controls id="audio">


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

