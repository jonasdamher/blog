<form method="GET" action="" role="search"
    class="col-md-8 col-xl-6 d-flex position-relative form-search d-flex justify-content-center f-column">
    <label for="search" class="d-none">Buscar</label>
    <input type="search" name="q" id="search" class="mb-1" placeholder="Buscar..." autocomplete="off" />
    <div class="d-flex w-100 list-categories scroll-horizontal">
        <span>
            <input type="checkbox" id="all" class="d-none" name="categories[]" value="">
            <label for="all" class="category" id="all-categories" tabindex="0">Todos</label>
        </span>

        @for ($i = 0; $i < 7; $i++)
            <span>
                <input type="checkbox" class="d-none checkbox-category" id="categoria-{{ $i }}"
                    name="categories[]" value="Categoría - {{ $i }}">
                <label for="categoria-{{ $i }}" class="category" tabindex="0">Categoría -
                    {{ $i }}</label>
            </span>
        @endfor
    </div>
</form>
