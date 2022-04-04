<!DOCTYPE html>
<html lang="es">

<head>
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="{{ asset('favicon.ico') }}">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/web/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/panel/dashboard.css') }}">
    @stack('scripts-head')

</head>

<body>
