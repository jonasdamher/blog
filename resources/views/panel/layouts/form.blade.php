<div class="col-12 border-bottom">
    <div class="d-flex justify-content-start align-items-center my-4">
        <a href="{{ URL::previous() }}" class="btn d-flex mr-2" title="Atrás">
         <img src="{{asset('image/icons/angle-left-solid.svg')}}" alt="Atrás" />
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
