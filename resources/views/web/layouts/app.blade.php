<!doctype html>
<html lang="es" prefix="og: https://ogp.me/ns#">

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index">
    <meta name="description"
        content="Blog y curriculum de Jonás Damián Hernández (jonasdamher). Desarrollador web y autodidacta.">
    <meta name="theme-color" content="#0540ff">
    {{-- Open graph --}}
    <meta property="og:title" content="The Rock" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.imdb.com/title/tt0117500/" />
    <meta property="og:image" content="https://ia.media-imdb.com/images/rock.jpg" />

    <link rel="apple-touch-icon" href="{{ asset('image/logo/maskable_icon_x192.png') }}">
    <link href="{{ asset('manifest.json') }}" rel="manifest">
    <!-- Scripts -->
    <script src="{{ asset(mix('js/web/sw.js')) }}"></script>
    <script src="{{ asset(mix('js/web/theme.js')) }}"></script>
    <!-- Styles -->
    <link href="{{ asset(mix('css/web/main.css')) }}" rel="stylesheet">
    @yield('css')
</head>

<body>
    @include('web.panels.navbar')
    @yield('content')
    @include('web.panels.footer')
    <a class="btn btn-up" title="Ir al principio" href="#" tabindex="-1" aria-label="Ir al principio"><img
            src="{{ asset('image/web/arrow-up-solid.svg') }}" alt="Ir al principio" /></a>
    {{-- Scripts --}}
    <script src="{{ asset(mix('js/web/main.js')) }}" defer></script>
    @yield('js-tails')
</body>

</html>
