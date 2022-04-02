@extends('layouts.app')

@section('css')
    <link href="{{ asset(mix('css/web/page/blog.css')) }}" rel="stylesheet">
@endsection

@section('content')
@section('header-content')
    <div class="col-md-6 d-flex ">
        <div class="d-flex flex-column align-items-start text-dark">
            <h1 class="title">Blog</h1>
            <p class="subtitle mb-2">Apuntes sobre desarrollo web, tutoriales y noticias.</p>
        </div>
    </div>

    @include('web.blog.form-search')
@endsection
@include('web.home.sections.header')

<main class="bg-white">
    <section id="blog" aria-label="Noticias disponibles" class="container">
        <div class="row" role="feed">

            <article class="col-md-6 col-lg-4 col-xxl-3" aria-labelledby="titulo" aria-describedby="Descripcion">
                @include('panels.card')
            </article>

        </div>
</main>
@endsection

@section('js-tails')
<script src="{{ asset(mix('js/blog/main.js')) }}" defer></script>
@endsection
