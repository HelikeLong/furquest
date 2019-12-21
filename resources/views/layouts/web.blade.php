<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pt-br">
<head>
    <title>@yield('title') - FurQuest | Evento Furry de Caçada ao Tesouro ARG</title>
    <link rel="shortcut icon" href="{{ vAsset('web/images/favicon.png') }}" type="image/x-icon" />

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="wot-verification" content="6aadc2f4d75dc5e3bab8"/>

    <link href="https://fonts.googleapis.com/css?family=Atma:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ vAsset('web/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ vAsset('web/css/noscript.css') }}" /></noscript>
    <link rel="stylesheet" href="{{ vAsset('web/css/generics.css') }}" />
</head>
<body class="is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <a href="{{ route('site.index') }}" class="logo">
            <img src="{{ vAsset('images/logo-negative.png') }}" alt="FurQuest" width="55px">
        </a>
        <nav id="nav">
            <ul>
                <li class="menu-link"><a href="{{ route('site.index') }}">Home</a></li>
                <li class="menu-link"><a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears">Inscreva-se!</a></li>
                <li class="menu-link"><a>Conheça mais <i class="fa fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="{{ route('site.about.furquest') }}">O que é o Furquest?</a></li>
                        <li><a href="{{ route('site.about.arg') }}">O que é ARG?</a></li>
                        <li><a href="{{ route('site.about.furry') }}">O que é Furry?</a></li>
                    </ul>
                </li>
                <li class="menu-link"><a href="{{ route('site.contact') }}">Contato</a></li>

                <li class="special menu-link mobile">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <ul>
                            <li class="menu-link"><a href="{{ route('site.index') }}">Home</a></li>
                            <li class="menu-link"><a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears">Inscreva-se!</a></li>
                            <li class="menu-link"><a>Conheça mais <i class="fa fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('site.about.furquest') }}">O que é o Furquest?</a></li>
                                    <li><a href="{{ route('site.about.arg') }}">O que é ARG?</a></li>
                                    <li><a href="{{ route('site.about.furry') }}">O que é Furry?</a></li>
                                </ul>
                            </li>
                            <li class="menu-link"><a href="{{ route('site.contact') }}">Contato</a></li>
                        </ul>
                    </div>
                </li>


                {{--                <li class="menu-link"><a href="#">Sign Up</a></li>--}}
                {{--                <li class="menu-link"><a href="https://app.furquest.crystalhorns.com">Acessar App</a></li>--}}


            </ul>
        </nav>
    </header>

    <!-- Main -->
    <article id="main">
        <header>
            @yield('h1')
        </header>
        <section class="wrapper style5">
            <div class="inner">
                @yield('content')
            </div>
        </section>
    </article>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="https://fb.com/FurQuestBR" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            {{--            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>--}}
            <li><a href="https://t.me/FurQuest" class="icon brands fa-telegram"><span class="label">Telegram</span></a></li>
            <li><a href="https://youtube.com/watch?v=XMUVxtMb2LA" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
            <li><a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears" class="icon solid fa-globe"><span class="label">Kickante</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; FurQuest</li><li>Um projeto <a href="https://crystalhorns.com/">CrystalHorns</a></li>
        </ul>
        <sup style="opacity: .5;"><sup><sup>Design: <a href="http://html5up.net">HTML5 UP</a></sup></sup></sup>
        <sup style="opacity: .5;"><sup><sup>
                    | <a href="https://app.termly.io/document/privacy-policy/6a5ce351-66cc-48f9-9287-7add09d49747">Politica de Privacidade</a>
                </sup></sup></sup>
    </footer>

</div>

<!-- Scripts -->
<script src="{{ vAsset('web/js/jquery.min.js') }}'"></script>
<script src="{{ vAsset('web/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ vAsset('web/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ vAsset('web/js/browser.min.js') }}"></script>
<script src="{{ vAsset('web/js/breakpoints.min.js') }}"></script>
<script src="{{ vAsset('web/js/util.js') }}"></script>
<script src="{{ vAsset('web/js/main.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154900793-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-154900793-2');
</script>

</body>
</html>
