<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}">
    <link href="//idealtrends.io/idealui/assets/vendor/material-input/css/material-input.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('greeva/dist/css/app.css')}}" rel="stylesheet"/>
    <link href="{{ asset('css/login/login.css')}}" rel="stylesheet"/>

    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="bg-account-pages">
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper-page">
                    <div class="account-pages text-center">
                        <span><img src="{{ asset('images/logo-negative-typo.png')}}" alt="" height="300"></span>
                        <div class="account-box">
                            <div class="account-logo-box">
                                @include('flash::message')
                                @include('layouts.elements.validator')
                            </div>
                            <div class="account-content">
                                <div class="button-container">
                                    <h1>Site em desenvolvimento</h1>
                                    <h4>Enquanto isso, acompanhe nosso crowdfunding para mais informações sobre o evento:</h4>
                                    <iframe width="260" height="467" frameborder="0" src="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears/card"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
