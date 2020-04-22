<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('boostrap/css/bootstrap.css') }}" rel="stylesheet">
    <style>
        .img {
            width: 50px;
            height: 50px;
            border-radius: 50px;
        }</style>
</head>
<body >
<div id="app">

    <div >
        <div class="row" style="background-color:black!important">

            @include('common.social-navbar')
        </div>
        <div>
            <nav class="navbar navbar-expand-md navbar-light  shadow-sm"
                 style="background-color:#FF5733!important">
                @include('common.top-navbar')

            </nav>
            @if (Auth::user())
                <div class="row mb-5  mr-md-4 mr-3 "
                >

                    @include('common.profile-navbar')

                </div>
            @endif
            @if (!Auth::user())
                <div class="row"
                >

                    @include('common.nav')

                </div>
            @endif

            <div class="row pt-lg-3 pt-md-3 pt-sm-2"  >

                @include('layouts.staffinfo')
            </div>
        </div>


    </div>

    <main class="py-4">
        {{--        @yield('content')--}}
    </main>
</div>
<script src="{{asset('boostrap/js/jquery.js')}}"></script>
<script src="{{asset('boostrap/js/bootstrap.js')}}"></script>


</body>




</html>
