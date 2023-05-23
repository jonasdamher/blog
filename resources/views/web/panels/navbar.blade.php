<nav id="navbar" role="navigation" aria-label="Main">
    <section class="navbar-body">
        <button type="button" class="btn btn-menu" aria-label="Menu" id="menu-open" title="Menú de navegación">
            <svg class="icon-menu" viewBox="0 0 32 32">
                <line x1="3" y1="3" x2="29" y2="3" />
                <line class="expand" x1="3" y1="16" x2="16" y2="16" />
                <line x1="3" y1="29" x2="29" y2="29" />
            </svg>
        </button>
        <a href="{{ route('home') }}" class="logo" title="{{ config('app.name') }}">
            <img src="{{ asset('image/logo/jonasdamher.png') }}" alt="{{ config('app.name') }}" />
        </a>
        <div class="navbar-list" id="menu">
            <ul>
                <li class="navbar-list-li">
                    <a href="{{ request()->is('/') ? '#cv' : route('home', '#cv') }}"
                        class="navbar-link{{ route('home', '#cv') == request()->fullUrl() ? ' active' : '' }}">CV</a>
                </li>
                <li class="navbar-list-li">
                    <a href="{{ route('blog') }}"
                        class="navbar-link{{ request()->is('blog') ? ' active' : '' }}">Blog</a>
                </li>
            </ul>
        </div>
        <span class="bg-menu"></span>
    </section>
</nav>
