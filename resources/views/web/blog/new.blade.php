@extends('layouts.app')

@section('css')
    <link href="{{ asset(mix('css/web/page/new.css')) }}" rel="stylesheet">
@endsection

@section('content')
@section('header-content')
    <div class="col-12">
        <div class="breadcrumbs">
            <ul>
                <li class="breadcrumbs-link"><a href="#">Inicio</a></li>
                <li class="breadcrumbs-link"><a href="#">Blog</a></li>
                <li class="breadcrumbs-link"><a href="#">Seguridad</a></li>
                <li aria-current="page">Crear certificado SSl wildcard autofirmado en windows 10</li>
            </ul>
        </div>
    </div>
    <div class="col-md-12 col-xl-6  d-flex">
        <div class="d-flex flex-column align-items-start text-dark content-text">
            <h1 class="title">Crear certificado SSl wildcard autofirmado en windows 10</h1>
            <div class="d-flex align-items-center mb-2">
                <a href="#" class="link-dark bold">
                    <small>Seguridad</small>
                </a>
                <span class="px-1 text-primary">●</span>
                <p class="text-gray bold">
                    <small>09/12/2022</small>
                </p>
            </div>
            <p class="subtitle mb-2">6 sencillos pasos para crear tu certificado SSL o certificado wildcard SSL autofirmado
                válido en windows 10 con OpenSSL.</p>

            <div class="d-flex f-wrap keywords">
                <span class="badge-dark">Lorem</span>
                <span class="badge-dark">Lorem</span>
                <span class="badge-dark">Lorem</span>
                <span class="badge-dark">Lorem</span>
                <span class="badge-dark">Lorem</span>
                <span class="badge-dark">Lorem</span>
                <span class="badge-dark">Lorem</span>

            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-6 d-flex">
        <img src="{{ asset('image/web/example.jpg') }}" alt="" class="img-fluid" />
    </div>
@endsection
@include('web.home.sections.header')

<main class="bg-white">
    <section id="new" class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xxl-9">
                <div class="new-content">
                    @include('web.blog.content-new')
                </div>
                <div class="new-pagination d-flex mb-2">
                    <ul class="d-flex">
                        <li>
                            <a href="#" class="link-primary">{!! __('pagination.previous') !!}</a>
                        </li>
                        <li>
                            <a href="#" class="link-primary">{!! __('pagination.next') !!}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="new-index col-lg-4 col-xxl-2 ">
                <div class="card new-content-index">
                    <div class="card-body">
                        <p class="bold mb-2">Índice</p>
                        <ul>
                            <li>
                                <a href="#">
                                    What is Lorem Ipsum?
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
