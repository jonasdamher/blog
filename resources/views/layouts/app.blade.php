<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index">
    <meta name="description"
        content="Blog y curriculum de Jonás Damián Hernández (jonasdamher). Desarrollador web y autodidacta.">
    <meta name="theme-color" content="#0540ff">
    <link rel="apple-touch-icon" href="{{asset('image/logo/launcher-2.png')}}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('manifest.json') }}" rel="manifest">
    <!-- Scripts -->
    <script src="{{ asset(mix('js/main.js')) }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset(mix('css/main.css')) }}" rel="stylesheet">
</head>

<body>
    @include('panels.navbar')

    @yield('content')

    @include('panels.footer')
</body>

</html>
