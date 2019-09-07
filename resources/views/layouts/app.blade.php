<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Pasca') }}</title>

    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" sizes="16x16">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        @yield('template_fastload_css')
        .pasca-blog:hover{
            box-shadow: -1px 1px 50px -1px #DDDDDD;
            -webkit-box-shadow: -1px 1px 50px -1px #DDDDDD;
            -moz-box-shadow: -1px 1px 50px -1px #DDDDDD;
            -o-box-shadow: -1px 1px 50px -1px #DDDDDD;
        }
        .pasca-contact-info ul li{
            color: rgba(255,255,255,.5);
        }
        .pasca-contact-info ul li:before{
            color: rgba(255,255,255,.5);
            font-size: 20px;
        }
    </style>    

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

</head>
<body>
    <div id="page">

        <div class="pasca-loader"></div>

        @include('inc.navbar')
        {{-- <div class="container"> --}}
            @yield('content')
        {{-- </div> --}}
        @include('inc.footer')
    </div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('footer_scripts')
</body>
</html>
