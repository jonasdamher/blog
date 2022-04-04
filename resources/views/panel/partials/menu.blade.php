    <div class="navbar-light bg-light menu border-end navbar-main">
        <div class="d-flex flex-column h-100">
            {{-- brand --}}
            <div class="py-3 px-4 border-bottom brand d-flex justify-content-center">
                <a class="navbar-brand m-0 d-flex align-items-center" href="#" title="{{ env('APP_NAME') }}">
                    <img src="{{ asset('images/logo.png') }}" class="logo" alt="{{ env('APP_NAME') }}" />
                    <img src="{{ asset('images/logo-squadsy.png') }}" class="logo logo-lg"
                        alt="{{ env('APP_NAME') }}" />
                </a>
            </div>
            {{-- Menu --}}
            <ul class="navbar-nav d-flex flex-column py-3 px-4 h-100 overflow-y-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}" title="Inicio">
                        <span class="icon"><i class="fas fa-chart-bar"></i></span><span
                            class="ps-2">Tablero</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href=" " title="Artículos">
                        <span class="icon"><i class="fas fa-box"></i></span><span
                            class="ps-2">Artículos</span>
                    </a>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Configuración">
                        <span class="icon"><i class="fas fa-cog"></i></span><span
                            class="ps-2">Configuración</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-menu toggle-menu"></div>
