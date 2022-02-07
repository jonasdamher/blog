<nav id="navbar">
    <section class="navbar-body">
        <a href="{{ route('home') }}" class="logo" title="{{ config('app.name') }}">
            <img src="{{ asset('image/logo/jonasdamher.png') }}" width="64px" height="64px"
                alt="{{ config('app.name') }}" />
        </a>
        <button type="button" class="btn btn-menu" title="Menú de navegación">
            <svg class="icon-menu" viewBox="0 0 64 64">
                <line x1="3" y1="3" x2="61" y2="3" />
                <line class="expand" x1="32" y1="32" x2="61" y2="32" />
                <line x1="3" y1="61" x2="61" y2="61" />
            </svg>
        </button>
        <div class="navbar-list">
            <ul>
                <li class="navbar-list-li">
                    <a href="#" class="navbar-link">CV</a>
                </li>
                <li class="navbar-list-li">
                    <a href="#" class="navbar-link">Blog</a>
                </li>
            </ul>
        </div>
    </section>
</nav>
