<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>CV - Brice Eliasse, développeur Full-Stack </title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/front.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">

        <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}" />
    </head>
    <body>
        <div id="app" >
            @auth
                <a href="{{route('admin')}}" class="btn btn-primary shadow rounded-circle admin-btn"><i class="fas fa-user-ninja"></i></a>
            @endauth
            @include('layouts.nav')
            <div id="swup">
                <main id="{{$view_name}}">
                    @yield('content')
                </main>
            </div>
            @include('layouts.footer')
        </div>
        @yield('scripts')
    </body>
</html>
