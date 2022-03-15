@extends('layouts.app')

@section('css')
<link href="{{ asset(mix('css/web/page/blog.css')) }}" rel="stylesheet">
@endsection

@section('content')
@section('header-content')
    <div class="col-md-6 d-flex">
        <div class="d-flex flex-column align-items-start text-dark">
             <h1 class="title">Blog</h1>
            <p class="subtitle mb-2">Apuntes sobre desarrollo web, tutoriales y noticias.</p>
            {{-- <a href="#cv" class="btn btn-primary-outline uppercase text-center">
                <span>Descubre más</span>
            </a> --}}
        </div>
    </div>
@endsection
    @include('web.home.sections.header')

    <main class="bg-white">
        <section id="blog" class="container">
            <div class="row">

                <article  aria-details="hola bro" class="col-md-6 col-lg-4 col-xxl-3">
                    @include('panels.card')
                </article>
                 
            </div>
    </main>
@endsection
