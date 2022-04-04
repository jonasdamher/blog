<div class="col-12 border-bottom">
    <div class="d-flex justify-content-start align-items-center my-4">
        <a href="{{ URL::previous() }}" class="btn text-primary d-flex mr-2" title="Atrás">
            <i class="fas fa-angle-left fa-2x"></i>
        </a>
        <h2 class="h3 m-0">@yield('formName')</h2>
    </div>
</div>

<div class="col-12">
    <div class="mt-4">
        @section('main')
        @show
    </div>
</div>
