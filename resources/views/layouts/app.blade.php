<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/gif" sizes="16x16" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if(isset($title)){{$title}}@else {{__('Rezervacija')}} @endif | {{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {!! RecaptchaV3::initJs() !!}
    <link href="{{ mix('css/app_custom.css') }}" rel="stylesheet">
    @yield('app-css')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark">
    </nav>

    <main class="">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="footer-1">
            <span>Andrej Marsetič | 2024</span>
        </div>

    </footer>
</body>

</html>
