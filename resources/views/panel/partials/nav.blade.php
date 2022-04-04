<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 border-bottom">
        <div class="container-fluid">
            <button class="btn text-primary toggle-menu mr-2" type="button" aria-label="Menu de navegación"
                title="Menu de navegación">
                <i class="fas fa-stream fa-lg"></i>
            </button>

            <ul class="navbar-nav ms-auto flex-row">
                <li class="nav-item position-relative">
                    <a class="nav-link px-3" href="#" title="Notificaciones">
                        <i class="fas fa-bell"></i>
                    </a>
                    <span class="badge badge-pill badge-danger position-absolute icon-notify"></span>
                </li>
                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle" href="#" id="perfil" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" title="Perfil">
                        <i class="fas fa-user-circle fa-lg"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end position-absolute" aria-labelledby="perfil">
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="icon pe-2"><i class="fas fa-user"></i></span>
                                Mi perfil</a>
                        </li>
                        <li> <a class="dropdown-item" href="#">
                                <span class="icon pe-2"><i class="fas fa-cogs"></i></span>
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
                                <span class="icon pe-2"><i class="fas fa-sign-out-alt"></i></span>
                                Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
