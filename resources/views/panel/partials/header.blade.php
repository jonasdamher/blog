<!DOCTYPE html>
<html lang="es">

<head>
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/ico" href="{{ asset('favicon.ico') }}">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/panel/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/panel/dashboard.css') }}">
    @stack('style-head')
    @stack('scripts-head')
</head>

<body>
