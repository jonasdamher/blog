 

@push('scripts-tail')
@endpush

@include('panel.partials.header')
<div class="d-flex">
    @include('panel.partials.menu')
    <!-- main -->
    <div class="main-view d-flex flex-column">
        @include('panel.partials.nav')
        <main>
            <div class="container-fluid">
                <div class="row">
                    @include('panel.layouts.'.$view)
                </div>
            </div>
        </main>
        @include('panel.partials.footer')
    </div>
</div>
@include('panel.partials.tail')
