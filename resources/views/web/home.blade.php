<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pt-br">
<head>
    <title>FurQuest | Evento Furry de Caçada ao Tesouro ARG</title>
    <link rel="shortcut icon" href="{{ vAsset('web/images/favicon.png') }}" type="image/x-icon" />

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="wot-verification" content="6aadc2f4d75dc5e3bab8"/>

    <link href="https://fonts.googleapis.com/css?family=Atma:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ vAsset('web/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ vAsset('web/css/noscript.css') }}" /></noscript>
    <link rel="stylesheet" href="{{ vAsset('web/css/home.css') }}" />
</head>
<body class="landing">

<video autoplay muted loop playsinline id="myVideo" preload="metadata" poster="{{ vAsset('web/videos/video_login.png') }}">
    <source src="{{ vAsset('web/videos/video_login.mp4') }}" type="video/mp4">
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
                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="200px" height="170px" viewBox="0 0 401.000000 331.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,331.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                        <path d="M700 3133 c-379 -95 -662 -171 -672 -180 -17 -15 -18 -87 -18 -1303 0 -1234 1 -1288 18 -1303 10 -10 29 -17 43 -17 13 0 307 72 653 160 l628 159 649 -325 649 -324 662 166 c385 96 670 172 680 181 17 15 18 88 18 1303 0 1234 -1 1288 -18 1303 -10 10 -29 17 -43 17 -13 0 -307 -72 -653 -160 l-628 -159 -649 325 c-357 178 -652 324 -656 323 -5 0 -303 -75 -663 -166z m600 -211 l0 -227 -42 3 c-54 4 -176 -23 -200 -45 -24 -21 -23 -68 2 -93 24 -24 36 -24 103 -6 29 8 71 16 95 19 l42 5 0 -806 c0 -895 -4 -842 66 -842 67 0 64 -46 65 865 0 451 4 811 9 800 12 -30 26 -39 121 -70 100 -32 131 -29 149 14 22 55 -7 81 -134 120 -86 26 -92 26 -121 -4 l-25 -24 0 244 c0 135 3 245 8 245 4 0 263 -130 577 -289 l570 -288 3 -877 2 -876 -49 0 c-66 0 -88 -22 -82 -80 4 -28 42 -50 87 -50 l44 0 0 -155 c0 -152 1 -156 25 -180 13 -14 29 -25 35 -25 16 0 53 21 62 34 4 6 8 84 8 173 0 106 4 164 11 169 7 4 8 21 4 48 -5 22 -9 438 -12 923 l-3 882 37 10 c142 37 1111 281 1116 281 4 0 7 -535 7 -1189 l0 -1189 -609 -152 -610 -152 -636 321 c-350 177 -647 321 -662 321 -14 0 -292 -67 -618 -150 -326 -82 -595 -150 -599 -150 -3 0 -6 535 -6 1189 l0 1189 578 145 c317 80 578 146 580 146 1 1 2 -101 2 -227z"/>
                        <path d="M833 2508 c-95 -88 -125 -155 -85 -191 31 -29 70 -21 105 20 18 20 49 56 70 78 44 50 50 95 15 119 -35 25 -55 19 -105 -26z"/>
                        <path d="M1806 2478 c-23 -33 -20 -54 17 -95 18 -21 48 -57 66 -81 38 -49 71 -61 106 -38 18 12 25 25 25 49 0 39 -16 64 -84 135 -58 60 -102 70 -130 30z"/>
                        <path d="M655 2210 c-30 -12 -40 -27 -69 -108 -42 -117 -31 -162 38 -162 43 0 49 8 86 112 37 105 37 121 4 147 -29 23 -30 23 -59 11z"/>
                        <path d="M2004 2134 c-22 -21 -25 -31 -19 -61 4 -20 10 -68 14 -106 5 -51 13 -73 26 -83 27 -20 69 -17 90 6 16 17 17 31 12 103 -8 105 -22 146 -54 158 -35 13 -41 12 -69 -17z"/>
                        <path d="M521 1811 c-23 -23 -38 -129 -22 -159 21 -39 90 -41 110 -4 5 10 13 45 16 79 7 54 5 63 -14 82 -26 26 -65 27 -90 2z"/>
                        <path d="M2035 1748 c-31 -17 -33 -24 -40 -135 -9 -120 1 -143 61 -143 48 0 61 27 69 146 l7 101 -27 22 c-31 24 -42 25 -70 9z"/>
                        <path d="M3109 1353 c-112 -109 -114 -122 -32 -205 l57 -57 -57 -60 c-82 -86 -80 -101 26 -208 107 -106 122 -108 208 -26 l60 57 57 -57 c83 -82 96 -80 205 32 56 57 87 96 87 111 0 13 -23 46 -60 84 l-59 62 54 54 c86 87 85 94 -28 207 -113 113 -120 114 -207 28 l-54 -54 -62 59 c-38 37 -71 60 -84 60 -15 0 -54 -31 -111 -87z m391 -179 c-78 -81 -78 -97 -3 -175 l57 -60 -22 -22 -22 -21 -58 57 c-77 76 -97 76 -174 0 l-58 -57 -22 22 -22 22 57 58 c76 77 76 97 0 174 l-57 58 21 22 22 22 60 -57 c79 -75 94 -75 174 2 l62 60 22 -21 23 -21 -60 -63z"/>
                        <path d="M2020 1348 c-13 -5 -28 -14 -32 -21 -20 -32 2 -208 29 -239 25 -28 79 -23 99 7 14 22 15 34 5 82 -6 31 -11 73 -11 92 0 64 -39 98 -90 79z"/>
                        <path d="M2126 958 c-26 -37 -19 -56 42 -120 86 -90 144 -112 176 -66 25 35 20 67 -16 96 -18 15 -52 46 -77 70 -52 50 -99 57 -125 20z"/>
                        <path d="M2922 829 c-59 -23 -78 -52 -62 -94 14 -38 50 -47 110 -29 85 25 115 79 70 124 -25 25 -50 25 -118 -1z"/>
                    </g>
                </svg>
            </div>
            <div class="content">
                <h2 class="font-furquest">Venha experimentar a nostalgia<br />
                    de uma caçada ao tesouro</h2>
                <p>Com um toque moderno.<br/>O ARG, ou "Jogo de Realidade Alternativa" em português, irá lhe proporcionar uma experiência completamente nova!</p>
            </div>
        </section>
        <section class="spotlight">
            <div class="image">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                     y="0px" width="200px" height="170px" viewBox="0 0 490 353" preserveAspectRatio="xMidYMid meet">
                    <g fill="#FFFFFF" stroke="none" id="Layer_2">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M363.23,267.784c-3.24,12.802-6.486,25.596-9.718,38.4   c-0.836,3.3-1.456,6.667-2.462,9.917c-3.061,9.85-11.031,15.237-20.644,14.119c-9.718-1.132-16.495-7.985-16.768-18.382   c-0.754-28.508-1.196-57.028-1.521-85.542c-0.224-19.599-0.041-39.203-0.041-59.2c-5.482,0-8.811,0-14.572,0   c0,13.145,0.174,26.397-0.033,39.646c-0.524,33.651-1.187,67.296-1.861,100.946c-0.279,13.81-6.143,21.501-16.964,22.566   c-10.979,1.08-17.995-4.823-21.541-18.469c-3.359-12.933-6.477-25.927-9.749-38.883c-0.464-1.824-1.198-3.583-2.389-7.09   c-4.621,18.198-8.654,34.639-13.016,50.994c-2.127,7.977-7.816,12.36-15.944,13.382c-8.214,1.034-14.906-2.156-18.598-9.336   c-2.099-4.08-2.798-9.241-2.894-13.94c-0.898-44.201-1.524-88.405-2.252-132.605c-0.038-2.229-0.316-4.45-0.518-7.159   c-3.952,0-7.533,0-12.634,0c0,4.265,0.056,8.416-0.007,12.57c-0.629,42.773-1.292,85.549-1.915,128.322   c-0.186,12.701-6.279,20.85-16.728,22.186c-10.703,1.369-18.649-4.668-21.842-17.013c-3.911-15.119-7.563-30.301-12.636-45.586   c-3.949,15.229-7.88,30.464-11.86,45.685c-3.266,12.485-10.888,18.385-21.71,16.904c-10.144-1.393-16.17-9.329-16.414-21.55   c-0.693-35.071-1.403-70.145-2.117-105.215c-0.032-1.644-0.164-3.284-0.37-7.236c-10.206,9.293-19.071,17.361-27.929,25.439   c-5.536,5.046-11.748,8.051-19.439,6.072c-15.109-3.885-20.008-20.003-9.931-33.294c14.461-19.078,29.406-37.793,43.629-57.042   c8.907-12.056,19.259-21.693,34.158-25.586c-17.667-27.215-16.779-49.928,2.42-66.983c16.574-14.722,42.087-15.223,58.892-1.159   c19.95,16.699,21.954,39.099,5.524,66.293c16.68,0,33.024,0,50.417,0c-8.19-11.133-13.298-23.177-11.201-37.063   c2.061-13.677,8.847-24.566,20.427-32.188c17.446-11.48,40.932-9.21,56.019,5.206c17.322,16.549,18.472,38.069,3.068,64.072   c16.602,0,32.886,0,50.255,0c-12.758-17.438-15.613-35.524-5.021-54.431c6.849-12.225,19.259-19.754,35.192-21.797   c0,4.175,0,8.371,0,13.308c-1.828,0.592-4.554,1.33-7.174,2.354c-17.397,6.796-25.289,26.383-17.391,43.044   c7.907,16.683,28.607,23.708,43.994,13.273c7.66-5.191,13.706-4.544,21.303-1.403c-1.41,2.438-3.479,8.136-9.229,13.416   c5.319,2.364,7.863,2.72,13,5c-1.125,4.938,5.626,4.851,4.345,10.491c-4.408-2.949-8.601-5.749-13.978-9.349   c-11.03,2.305-28.164-0.376-31.915-6.463c0,2.5,0,4.193,0,6.912c-3.328,0-6.369,0-9.411,0c-80.72,0-161.439,0.143-242.158-0.122   c-16.509-0.056-28.866,5.985-38.612,19.346c-13.931,19.106-28.733,37.571-43.027,56.415c-2.726,3.593-8.088,7.423-2.925,12.396   c5.268,5.074,8.698-0.557,12.052-3.579c11.218-10.119,22.096-20.627,33.503-30.527c2.653-2.301,7.629-4.613,10.178-3.575   c2.483,1.006,4.45,6.261,4.551,9.711c1.16,39.625,1.922,79.26,2.783,118.896c0.031,1.424-0.425,3.046,0.104,4.237   c1.313,2.949,1.423,8.18,4.645,8.531c3.287,0.359,5.596-4.606,6.379-7.466c4.589-16.721,8.551-33.615,12.747-50.448   c1.582-6.347,3.395-12.639,4.788-19.024c1.07-4.893,3.773-9.082,8.037-9.9c3.209,0.613,6.716,6.279,7.81,10.289   c6.121,22.495,11.542,45.179,17.219,67.795c0.413,1.653,0.497,3.694,1.534,4.819c1.518,1.649,3.716,3.505,5.7,3.6   c1.324,0.063,3.354-2.59,4.022-4.411c0.745-2.031,0.348-4.5,0.387-6.777c0.748-46.769,1.472-93.535,2.249-140.306   c0.164-9.945,1.761-11.532,11.382-11.644c5.703-0.07,11.408-0.003,17.111,0.024c10.557,0.052,11.954,1.337,12.113,11.65   c0.69,44.2,1.334,88.404,2,132.604c0.063,3.99-0.349,8.088,0.438,11.936c0.533,2.596,1.487,6.847,4.283,7.227   c2.998,0.407,5.79-3.736,6.465-6.21c4.572-16.723,8.542-33.614,12.692-50.453c1.769-7.18,2.96-14.565,5.479-21.47   c1.277-3.513,3.496-9.141,7.479-9.21c3.884-0.067,6.678,5.362,7.59,8.705c6.436,23.59,12.087,47.389,18.396,71.015   c0.769,2.89,2.762,8.008,6.022,7.679c3.46-0.349,4.556-6.133,4.636-9.253c1.212-47.323,2.061-94.658,2.966-141.991   c0.217-11.177,1.188-12.211,12.319-12.295c5.703-0.045,11.425,0.265,17.108-0.063c7.656-0.446,10.486,2.625,10.601,10.466   c0.697,47.337,1.815,94.664,2.794,142c0.027,1.424-0.408,3.088,0.177,4.226c1.248,2.432,1.841,6.601,4.584,6.857   c2.759,0.259,5.08-3.587,5.716-5.903c4.37-15.911,8.232-31.963,12.232-47.974c1.927-7.72,3.21-15.672,5.941-23.093   c1.438-3.91,3.745-10.363,8.156-10.319c4.2,0.042,6.564,6.229,7.571,9.958c6.226,23.066,11.646,46.352,17.737,69.457   c0.776,2.953,2.63,8.144,5.94,7.902c3.493-0.255,4.87-6.05,4.957-9.142c1.146-40.195,1.738-80.406,2.859-120.602   c0.111-4.046,0.296-10.311,4.203-12.034c3.89-1.715,8.603,2.375,11.66,5.007c11.662,10.035,22.616,20.896,34.288,30.924   c2.36,2.03,7.49,4.911,10.119,2.572c2.672-2.377,0.459-8.025-1.38-10.522c-13.495-18.374-27.532-36.345-41.38-54.458   c-1.703-2.232-3.29-4.551-4.966-6.873c11.021-5.328,17.623-0.788,23.887,8.078c10.851,15.352,22.745,29.956,34.131,44.928   c8.065,10.602,7.743,21.545-0.683,29.137c-8.698,7.824-18.963,7.113-28.984-2.03c-8.411-7.678-16.814-15.373-25.233-23.048   c-0.178-0.164-0.512-0.153-1.55-0.432c-0.208,2.479-0.529,4.836-0.582,7.197c-0.734,34.503-1.462,69.002-2.123,103.508   c-0.17,8.853-2.667,16.355-11.313,20.357c-10.955,5.064-22.801-0.276-26.248-12.425c-4.526-15.981-8.353-32.16-12.479-48.256   C364.157,267.9,363.694,267.845,363.23,267.784z M276.551,79.267c0.121-17.5-13.748-31.808-31.029-32.01   c-16.834-0.195-31.749,14.418-32.009,31.358c-0.257,16.939,14.259,31.721,31.342,31.912   C262.162,110.72,276.43,96.652,276.551,79.267z M126.861,110.524c17.127-0.146,31.445-14.715,31.302-31.86   c-0.139-17.023-14.899-31.564-31.863-31.396c-17.107,0.17-31.415,14.804-31.241,31.953   C95.23,96.472,109.656,110.67,126.861,110.524z"/>
                    </g>
                    <g fill="#FFFFFF" stroke="none" id="Layer_3">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M362.952,124.341c0,0,37.298-0.591,52.846,16.602   c15.664,17.322,23.887,8.078,23.887,8.078s-24.53-37.771-76.732-36.521s-52.202,1.25-52.202,1.25L362.952,124.341z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M359.996,33.757c0,0,68.504-0.359,40.732,70.577   c-9.33,23.833-26.377,3.058-21.303,1.403C384.75,104,415.5,52,359.996,47.065C327.9,44.212,359.996,33.757,359.996,33.757z"/>
                    </g>
                </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="200px" height="170px"
                     preserveAspectRatio="xMidYMid meet" fill="#FFFFFF" stroke="none">
                    <path d="M20.4,9.2L22,5c0-1.7-1.3-3-3-3H5C3.3,2,2,3.3,2,5l1.3,3.6C2.5,9.2,2,10.1,2,11.2V12v10h20V12C22,10.9,21.4,9.9,20.4,9.2z M4,12v-0.8c0-1,1.5-1.8,2.8-1.4l1,0.3l0.3-1C8.3,8.5,9.1,8,10,8c0.7,0,1.4,0.3,1.7,0.8l0.5,0.6L13,9.1c1.2-0.6,2.7,0,3,0.9l0.3,1 l1-0.3C18.5,10.2,20,11,20,12H4z M13,15c0,0.6-0.4,1-1,1s-1-0.4-1-1c0-0.6,0.4-1,1-1S13,14.4,13,15z M20.2,5l-1.5,3.6 c-0.2,0-0.5-0.1-0.7-0.1c-0.2,0-0.4,0-0.6,0c-0.7-1-2-1.7-3.4-1.7c-0.4,0-0.8,0.1-1.2,0.2c-0.7-0.6-1.7-1-2.8-1 C8.6,6,7.3,6.7,6.6,7.7c-0.2,0-0.4,0-0.6,0c-0.4,0-0.7,0.1-1.1,0.1L3.8,5H20.2z M6,20c0-1.1-0.9-2-2-2v-4h5v2c0,1.1,0.9,2,2,2h2 c1.1,0,2-0.9,2-2v-2h5v4c-1.1,0-2,0.9-2,2H6z"/>
                </svg>
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
                    <h3 class="font-furquest">Guilda - R$135</h3>
                    <ul>
                        <li><strong>Vale três inscrições</strong></li>
                        <li>Poder escolher os membros da Guilda</li>
                        <li>Nome Guilda</li>
                        <li>Badge Guilda</li>
                        <li>Cordão de Badge Simples</li>
                        <li>Bottoms e Adesivos</li>
                    </ul>

                    <a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears/apoiar?amount=13500" class="button fit">Quero esse!</a>
                </li>
                <li class="icon solid fa-users">
                    <h3 class="font-furquest">Super Guilda - R$185</h3>
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

                    <a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears/apoiar?amount=18500" class="button fit">Quero esse!</a>
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
