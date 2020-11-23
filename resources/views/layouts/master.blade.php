<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title>FurQuest</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="FurQuest Admin panel" name="description"/>
    <meta content="Creative Tim && Crystal Horns" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <!-- Icons css -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="{{asset('node_modules/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS Files -->
    <link href="{{ asset('paper') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('paper') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    
    <!-- Sweet Alert -->
    <link href="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('node_modules/switchery/standalone/switchery.css') }}" rel="stylesheet">
    <link href="{{ asset('node_modules/jquery-ui/themes/base/datepicker.css') }}" rel="stylesheet"/>
    <link href="{{ asset('node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet"/>

    <!-- Ladda Button -->
    <link href="{{ asset('node_modules/ladda/dist/ladda.min.css') }}" rel="stylesheet"/>

    <!-- IdealUI -->
    <link href="//idealtrends.io/idealui/dist/idealui/idealui.min.css" rel="stylesheet" type="text/css"/>
    <link href="//idealtrends.io/idealui/assets/vendor/material-input/css/material-input.css" rel="stylesheet" type="text/css"/>

    <!-- App css -->
    <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css"/>
    @stack('css')
</head>

<body>
    @auth()
        @include('layouts.page_templates.auth')
    @endauth
</body>

    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('node_modules/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('paper') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- jQuery  -->
    <script src="{{asset('node_modules/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- SweetAlert -->
    <script src="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <!-- MetisMenu JS -->
    <script src="{{ asset('node_modules/metismenu/dist/metisMenu.min.js')}}"></script>
    <!-- Jquery-Ui -->
    <script src="{{ asset('node_modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Masks -->
    <script src="{{ asset('node_modules/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('node_modules/jquery-maskmoney/dist/jquery.maskMoney.min.js') }}"></script>
    <script src="{{ asset('node_modules/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('node_modules/mohithg-switchery/dist/switchery.min.js') }}"></script>
    <script src="{{ asset('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js') }}"></script>
    <script src="{{ asset('node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <!-- Ladda Button -->
    <script src="{{ asset('node_modules/ladda/node_modules/spin.js/spin.min.js') }}"></script>
    <script src="{{ asset('node_modules/ladda/dist/ladda.min.js') }}"></script>
    <!-- Switchery -->
    <script src="{{ asset('node_modules/switchery/standalone/switchery.js')}}"></script>
    <!-- IdealUI -->
    <script src="//idealtrends.io/idealui/dist/idealui/idealui.min.js"></script>
    <script>
        IdealUiJs.baseUrl = '{{ \Illuminate\Support\Facades\URL::to('/') }}';
    </script>
    <script src="//idealtrends.io/idealui/assets/vendor/form-wizard/js/form-wizard.js"></script>

    <script src="{{ asset('paper') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <!-- Core.js -->
    <script src="{{asset('js/core.js')}}"></script>

    @include('admin.elements.flash')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('scripts')
</html>
