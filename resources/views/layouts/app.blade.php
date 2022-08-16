<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        

        <title>{{ config('app.name', 'CV Web') }}</title>

        <!-- Scripts -->
   

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div id="app">
            @auth
                <a href="{{route('admin')}}" data-no-swup class="btn btn-primary shadow rounded-circle admin-btn"><i class="fas fa-user-ninja"></i></a>
            @endauth
            @if (Route::currentRouteName() !== "login")
                @include('layouts.nav')
            @endif
            <div id="swup">
                <main id="{{$view_name}}">
                    @yield('content')
                </main>
            </div>
            @include('layouts.footer')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/front.js') }}"></script>
        @yield('scripts')
    </body>
</html>
