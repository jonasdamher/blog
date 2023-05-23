<!doctype html>
<html lang="es" dir="ltr" prefix="og: https://ogp.me/ns#">

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index">
    <meta name="description"
        content="Blog y curriculum de Jonás Damián Hernández (jonasdamher). Desarrollador web y autodidacta.">
    <meta name="theme-color" content="#0540ff">
    <link rel="apple-touch-icon" href="{{ asset('image/logo/maskable_icon_x192.png') }}">
    <link href="{{ asset('manifest.json') }}" rel="manifest">
    <!-- Scripts -->
    <script src="{{ asset(mix('js/web/sw.js')) }}"></script>
    <!-- Styles -->
    <link href="{{ asset(mix('css/web/main.css')) }}" rel="stylesheet">
    @yield('css')
</head>

<body>
    @yield('content')
    @include('web.panels.footer')
    <a class="btn btn-up" title="Ir al principio" href="#" tabindex="-1" aria-label="Ir al principio"><img
            src="{{ asset('image/icons/arrow-up-solid.svg') }}" alt="Ir al principio" /></a>
    {{-- Scripts --}}
    @yield('js-tails')
</body>

</html>
