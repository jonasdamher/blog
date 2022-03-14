@extends('layouts.app')

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
    <div class="col-12">
        <ul class="header-social">
            <li>
                <a href="https://github.com/jonasdamher" target="_blank" rel="noreferrer" title="github">
                    <img src="{{ asset('image/social/github.svg') }}" alt="github" width="24px" height="26px" />
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/jonasdamher/" target="_blank" rel="noreferrer" title="linkedin">
                    <img src="{{ asset('image/social/linkedin.svg') }}" alt="linkedin" width="24px" height="27px" />
                </a>
            </li>
            <li>
                <a href="https://es.stackoverflow.com/users/161975/jonasdamher" target="_blank" rel="noreferrer"
                    title="stack-overflow">
                    <img src="{{ asset('image/social/stack-overflow.svg') }}" alt="stack-overflow" width="24px"
                        height="32px" />
                </a>
            </li>
            <li>
                <a href="https://twitter.com/jonasdamher" target="_blank" rel="noreferrer" title="twitter">
                    <img src="{{ asset('image/social/twitter.svg') }}" alt="twitter" width="24px" height="24px" />
                </a>
            </li>
        </ul>
    </div>
    
@endsection
    @include('web.home.sections.header')

    <main class="bg-white">
        <section id="cv" class="container">
            <div class="row">

                <article  aria-details="hola bro" class="col-md-6 col-lg-4 col-xxl-3">
                    @include('panels.card')
                </article>
                 
            </div>
    </main>
@endsection
