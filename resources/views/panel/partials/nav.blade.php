<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 border-bottom">
        <div class="container-fluid">
            <button class="btn text-primary toggle-menu mr-2" type="button" aria-label="Menu de navegación"
                title="Menu de navegación">
                <img src="{{ asset('image/icons/stream-solid.svg') }}" alt="Menú" />
            </button>

            <ul class="navbar-nav ms-auto flex-row">
                <li class="nav-item position-relative">
                    <a class="nav-link px-3" href="#" title="Notificaciones">
                        <img src="{{ asset('image/icons/bell-solid.svg') }}" alt="Notificaciones" />
                    </a>
                    <span class="badge badge-pill badge-danger position-absolute icon-notify"></span>
                </li>
                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle px-2 me-3" href="#" id="perfil" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" title="Perfil">
                        <img src="{{ asset('image/icons/user-circle-solid.svg') }}" alt="Menú" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end position-absolute" aria-labelledby="perfil">
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="icon pe-2"> <img src="{{ asset('image/icons/user-solid.svg') }}"
                                        alt="Usuario" /></span>
                                Mi perfil</a>
                        </li>
                        <li> <a class="dropdown-item" href="#">
                                <span class="icon pe-2"><img src="{{ asset('image/icons/cogs-solid.svg') }}"
                                        alt="Usuario" /></span>
                                Configuración</a> </li>
                        <li>
                            <div class="dropdown-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="change-main-main">
                                    <label class="form-check-label w-100" for="change-main-main">
                                        Menu
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li> <a class="dropdown-item" href="#">
                                <span class="icon pe-2"><img
                                        src="{{ asset('image/icons/sign-out-alt-solid.svg') }}"
                                        alt="Usuario" /></span>
                                Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
