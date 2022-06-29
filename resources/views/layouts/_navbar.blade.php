<div>
    <nav class="navbar navbar-dark navbar-expand-lg" style=" background-color: #12466B;">
        <div class="container">
            <h1 class="navbar-brand d-lg-none fw-bold">MENU</h1>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-3 mb-2 mb-lg-0 fw-semibold">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('playing.index') }}"
                            class="nav-link {{ Route::is('playing*') ? 'active' : '' }}">
                            <i class="fas fa-play"></i> Now Playing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('popular.index') }}"
                            class="nav-link {{ Route::is('popular*') ? 'active' : '' }}">
                            <i class="fas fa-heart"></i> Popular
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rated.index') }}"
                            class="nav-link {{ Route::is('rated*') ? 'active' : '' }}">
                            <i class="fas fa-star"></i> Top Rated
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href class="nav-link">
                            <i class="fas fa-"></i> Up Coming
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
