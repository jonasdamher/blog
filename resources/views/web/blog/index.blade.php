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

    <form method="GET" action=""
        class="col-md-6 d-flex position-relative form-search d-flex justify-content-center f-column">
        <label for="search" class="d-none">Buscar</label>
        <input type="search" name="q" id="search" class="mb-2" placeholder="Buscar..." autocomplete="off" />
        <div class="d-flex w-100 list-categories">
            <span>
                <input type="checkbox" class="d-none" id="all" name="categories[]" value="">
                <label for="all" class="category">Todos</label>
            </span>
            <span>
                <input type="checkbox" class="d-none" id="categoria" name="categories[]" value="Seguridad">
                <label for="categoria" class="category">Seguridad</label>
            </span>
            <span>
                <input type="checkbox" class="d-none" id="categoria1" name="categories[]" value="Seguridad 1">
                <label for="categoria1" class="category">Seguridad 1</label>
            </span>
            <span>
                <input type="checkbox" class="d-none" id="categoria2" name="categories[]" value="Seguridad 2">
                <label for="categoria2" class="category">Seguridad 2</label>
            </span>
        </div>
    </form>
@endsection
@include('web.home.sections.header')

<main class="bg-white">
    <section id="blog" class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs pb-2 pt-0">
                    <ul>
                        <li class="breadcrumbs-link"><a href="#">Inicio</a></li>
                        <li class="breadcrumbs-link"><a href="#">Blog</a></li>
                        <li>Seguridad</li>
                    </ul>
                </div>
            </div>
            <article aria-details="hola bro" class="col-md-6 col-lg-4 col-xxl-3">
                @include('panels.card')
            </article>

        </div>
</main>
@endsection
