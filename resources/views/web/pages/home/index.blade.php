@extends('web.layouts.app')

@section('css')
<link href="{{ asset(mix('css/web/page/home.css')) }}" rel="stylesheet">
@endsection

@section('content')
@section('header-content')
<div class="col-md-6 d-flex justify-content-center align-items-center">
    <div class="d-flex flex-column align-items-start text-dark">
        <p class="subtitle p"><b>Desarrollador web</b></p>
        <h1 class="title">Jonás Damián</h1>
        <p class="subtitle mb-2">Autodidacta en este mundillo</p>
        <a href="#cv" class="btn btn-primary-outline uppercase text-center">
            <span>¿Buscas candidato?</span>
        </a>
    </div>
</div>
<div class="col-md-2 d-flex">
    <img src="{{ asset('image/web/jonas.jpg') }}" alt="Foto de perfil de Jonás Damián" class="w-100 header-image" />
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
            <a href="https://es.stackoverflow.com/users/161975/jonasdamher" target="_blank" rel="noreferrer" title="stack-overflow">
                <img src="{{ asset('image/social/stack-overflow.svg') }}" alt="stack-overflow" width="24px" height="32px" />
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
@include('web.pages.home.sections.header')
<main class="bg-white">
    @include('web.pages.home.sections.cv')
</main>
@endsection