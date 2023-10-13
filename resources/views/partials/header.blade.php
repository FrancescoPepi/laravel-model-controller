<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ Route('homepage') }}">
            <img src="{{ Vite::asset('storage/images/logo.png') }}" alt="logo" width="40">
        </a>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}"
                        href="{{ Route('homepage') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'film' ? 'active' : '' }}"
                        href="{{ Route('film') }}">FILM</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
