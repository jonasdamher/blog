    <div class="navbar-light bg-light menu border-end navbar-main">
        <div class="d-flex flex-column h-100">
            {{-- brand --}}
            <div class="py-3 px-4 border-bottom brand d-flex justify-content-center">
                <a class="navbar-brand m-0 d-flex align-items-center" href="{{ route('dashboard') }}"
                    title="{{ env('APP_NAME') }}">
                    <img src="{{ asset('image/logo/jonasdamher.png') }}" class="logo"
                        alt="{{ env('APP_NAME') }}" />
                </a>
            </div>
            {{-- Menu --}}
            <ul class="navbar-nav d-flex flex-column py-3 px-4 h-100 overflow-y-auto overflow-x-hidden">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}" title="Inicio">
                        <span class="icon"><img src="{{ asset('image/icons/chart-bar-regular.svg') }}"
                                alt="Icono tablero" /></span><span class="ps-2">Tablero</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('publication') }}" title="Artículos">
                        <span class="icon"> <img src="{{ asset('image/icons/file-alt-solid.svg') }}"
                                alt="Icono publicaciones" /></span><span class="ps-2">Publicaciones</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" title="Configuración">
                        <span class="icon"><img src="{{ asset('image/icons/cogs-solid.svg') }}"
                                alt="Icono configuración" /></span><span class="ps-2">Configuración</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-menu toggle-menu"></div>
