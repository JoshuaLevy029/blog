<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="icon" href="{{favicon(32)}}" sizes="32x32" />
        <link rel="icon" href="{{favicon(192)}}" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{favicon(180)}}" />
        <meta name="msapplication-TileImage" content="{{favicon(270)}}" /> --}}
        <meta name="title" content="{{title()}} @yield('title')">
        <meta name="description" content="{{description()}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @stack('meta')
        <title>{{title()}} @yield('title')</title>
        <link rel="stylesheet" href="{{module('bootstrap/dist/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{module('mdbootstrap/css/mdb.css')}}">
        <link rel="stylesheet" href="{{module('@fortawesome/fontawesome-free/css/all.css')}}">
        <link rel="stylesheet" href="{{module('startbootstrap-simple-sidebar/css/simple-sidebar.css')}}">
        <link rel="stylesheet" href="{{module('toastr/build/toastr.css')}}">
        <link rel="stylesheet" href="{{module('sweetalert2/dist/sweetalert2.css')}}">
        <link rel="stylesheet" href="{{module('lightbox2/src/css/lightbox.css')}}">
        <link rel="stylesheet" href="{{css('app.css')}}">
        @stack('styles')
    </head>
    <body>
        
        @yield('content')
        
        @yield('modals')
        
        <script src="{{module('jquery/dist/jquery.js')}}"></script>
        <script src="{{module('bootstrap/dist/js/bootstrap.js')}}"></script>
        <script src="{{module('mdbootstrap/js/mdb.js')}}"></script>
        <script src="{{module('toastr/build/toastr.min.js')}}"></script>
        <script src="{{module('sweetalert2/dist/sweetalert2.js')}}"></script>
        <script src="{{module('lightbox2/src/js/lightbox.js')}}"></script>
        <link rel="stylesheet" href="{{js('app.js')}}">
        @stack('scripts')
    </body>
</html>