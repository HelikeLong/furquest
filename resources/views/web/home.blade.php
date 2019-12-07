<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pt-br">
<head>
    <title>FurQuest | Evento Furry de Caçada ao Tesouro ARG</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="wot-verification" content="6aadc2f4d75dc5e3bab8"/>

    <link href="https://fonts.googleapis.com/css?family=Atma:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ vAsset('web/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ vAsset('web/css/noscript.css') }}" /></noscript>
    <link rel="stylesheet" href="{{ vAsset('web/css/custom.css') }}" />
</head>
<body class="landing is-preload">
<video autoplay muted loop id="myVideo" poster="{{ vAsset('web/videos/video_login.png') }}">
    <source src="{{ vAsset('web/videos/video_login.mp4') }}"  type="video/mp4">
</video>

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1>
            <a href="{{ route('site.index') }}">
                <img src="{{ vAsset('images/logo-negative.png') }}" alt="FurQuest" width="55px">
            </a>
        </h1>
        <nav id="nav">
            <ul>
{{--                <li class="menu-link"><a href="{{ route('site.index') }}">Home</a></li>--}}
{{--                <li class="menu-link"><a href="generic.html">Generic<i class="fa fa-chevron-down"></i></a>--}}
{{--                    <ul class="submenu">--}}
{{--                        <li><a href="index.html">Home</a></li>--}}
{{--                        <li><a href="generic.html">Generic</a></li>--}}
{{--                        <li><a href="elements.html">Elements</a></li>--}}
{{--                        <li><a href="#">Sign Up</a></li>--}}
{{--                        <li><a href="#">Log In</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="menu-link"><a href="#">Sign Up</a></li>--}}
{{--                <li class="menu-link"><a href="https://app.furquest.crystalhorns.com">Acessar App</a></li>--}}

{{--                <li class="special menu-link mobile">--}}
{{--                    <a href="#menu" class="menuToggle"><span>Menu</span></a>--}}
{{--                    <div id="menu">--}}
{{--                        <ul>--}}
{{--                            <li><a href="{{ route('site.index') }}">Home</a></li>--}}
{{--                            <li class="menu-link"><a href="generic.html">Generic<i class="fa fa-chevron-down"></i></a>--}}
{{--                                <ul class="submenu">--}}
{{--                                    <li><a href="index.html">Home</a></li>--}}
{{--                                    <li><a href="generic.html">Generic</a></li>--}}
{{--                                    <li><a href="elements.html">Elements</a></li>--}}
{{--                                    <li><a href="#">Sign Up</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="https://app.furquest.crystalhorns.com">Acessar App</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h1 class="font-furquest">
                <img src="{{ vAsset('images/logo-negative-typo.png') }}" alt="FurQuest" width="250px">
            </h1>
            <p>Evento Furry de Caçada ao Tesouro em ARG.</p>
            <ul class="actions special">
                <li><a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears" class="button primary cta">Quero Participar!</a></li>
            </ul>
        </div>
        <a href="#two" class="more scrolly">Conheça</a>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper alt style2">
        <section class="spotlight">
            <div class="image">

            </div>
            <div class="content">
                <h2 class="font-furquest">Venha experimentar a nostalgia<br />
                    de uma caçada ao tesouro</h2>
                <p>Com um toque moderno.<br/>O ARG, ou "Jogo de Realidade Alternativa" em português, irá lhe proporcionar uma experiência completamente nova!</p>
            </div>
        </section>
        <section class="spotlight">
            <div class="image">

            </div>
            <div class="content">
                <h2 class="font-furquest">Desevende enigmas com seus<br />
                    amigos e conheça mais sobre SP</h2>
                <p>Os participantes serão separados em trios, chamados de guildas, para desenvendar os enigmas da caçada,
                    com o auxílio de dicas, enquanto conhecem e aprendem mais sobre os locais onde o evento será realizado. </p>
            </div>
        </section>
        <section class="spotlight">
            <div class="image">

            </div>
            <div class="content">
                <h2 class="font-furquest">E concorra a mais de R$1000<br />
                    em prêmios exclusivos</h2>
                <p>Nossos baús estaram recheados de prêmios como commissions com grandes artistas, incríveis prints
                    feitas especialmente para o evento, pelúcias, canecas e muito outros brindes exclusivos!</p>
            </div>
        </section>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style3 special">
        <div class="inner">
            <header class="major">
                <h2 class="font-furquest">Participe dessa grande caçada!</h2>
                <p>Se inscreva agora mesmo para participar de nossa caçada.<br />
                    Você pode escolher entre os níveis de inscrição abaixo:</p>
            </header>
            <ul class="features">
                <li class="icon solid fa-dice-d6">
                    <h3 class="font-furquest">Aventureiro - R$40</h3>
                    <ul>
                        <li>Badge</li>
                        <li>Cordão de Badge Simples</li>
                        <li>Bottoms e Adesivos</li>
                    </ul>

                    <a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears/apoiar?amount=4000" class="button fit">Quero esse!</a>
                </li>
                <li class="icon solid fa-dice-d20">
                    <h3 class="font-furquest">Super Aventureiro - R$55</h3>
                    <ul>
                        <li>Badge Exclusiva Plastificada</li>
                        <li>Cordão de Badge Especial</li>
                        <li>Bottoms e Adesivos</li>
                        <li>Bottom Exclusivo</li>
                        <li>Mochila Especial</li>
                    </ul>

                    <a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears/apoiar?amount=5500" class="button fit">Quero esse!</a>
                </li>
                <li class="icon solid fa-user-friends">
                    <h3 class="font-furquest">Guilda - R$150</h3>
                    <ul>
                        <li><strong>Vale três inscrições</strong></li>
                        <li>Poder escolher os membros da Guilda</li>
                        <li>Nome Guilda</li>
                        <li>Badge Guilda</li>
                        <li>Cordão de Badge Simples</li>
                        <li>Bottoms e Adesivos</li>
                    </ul>

                    <a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears/apoiar?amount=15000" class="button fit">Quero esse!</a>
                </li>
                <li class="icon solid fa-users">
                    <h3 class="font-furquest">Super Guilda - R$195</h3>
                    <ul>
                        <li><strong>Vale três inscrições</strong></li>
                        <li>Poder escolher os membros da Guilda</li>
                        <li>Nome Guilda</li>
                        <li>Bandeira da Guilda</li>
                        <li>Badge Guilda Exclusiva Plastificada</li>
                        <li>Cordão de Badge Especial</li>
                        <li>Bottoms e Adesivos</li>
                        <li>Bottom Exclusivo</li>
                        <li>Mochila Especial</li>
                    </ul>

                    <a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears/apoiar?amount=19500" class="button fit">Quero esse!</a>
                </li>
            </ul>

            <header class="major" style="margin-top: 70px">
                <h2 class="font-furquest">Mas se você quiser só os brindes...</h2>
                <p>Talvez você tenha chego tarde ou não queira participar da caçada<br />
                    mas gostaria de receber os nossos brindes exclusivos, temos a solução pra você:</p>
            </header>
            <ul class="features">
                <li style="display:none;"></li>
                <li style="display:none;"></li>
                <li style="display:none;"></li>
                <li style="display:none;"></li>
                <li class="icon fa-heart">
                    <h3 class="font-furquest">NPC - R$15</h3>
                    <ul>
                        <li>Badge</li>
                        <li>Cordão de Badge Simples</li>
                        <li>Bottoms e Adesivos</li>
                    </ul>

                    <a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears/apoiar?amount=1500" class="button fit">Quero esse!</a>
                </li>
                <li class="icon solid fa-heart">
                    <h3 class="font-furquest">Super NPC - R$30</h3>
                    <ul>
                        <li>Badge Exclusiva Plastificada</li>
                        <li>Cordão de Badge Especial</li>
                        <li>Bottoms e Adesivos</li>
                        <li>Bottom Exclusivo</li>
                        <li>Mochila Especial</li>
                    </ul>

                    <a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears/apoiar?amount=3000" class="button fit">Quero esse!</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper style4 text-center">
        <img src="{{ vAsset('web/images/logo-piratesngears.png') }}" alt="FurQuest - Pirates 'n Gears">
        <div class="inner">
            <p>Venha participar da primeira edição do FurQuest.<br/>Realizaremos-a no Parque Ibirapuera no dia 26 de Janeiro de 2020.</p>
        </div>
        <ul class="actions special">
            <li><a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears" class="button fit primary">Quero Participar!</a></li>
        </ul>
    </section>

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
            <a href="https://app.termly.io/document/privacy-policy/6a5ce351-66cc-48f9-9287-7add09d49747">Politica de Privacidade</a>
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

</body>
</html>
