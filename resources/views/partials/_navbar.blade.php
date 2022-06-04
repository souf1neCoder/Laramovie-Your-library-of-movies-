<header>
    <nav>
        <div data-aos="fade-down" class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <a title="Laramovie" href="{{ route('home') }}" class="navbar-brand"><i class="fas fa-film"></i><span class="mym text-uppercase">Laramovie</span></a>
            </div>
            <a  title="About us" href="{{ route('about') }}" class="nav-link {{ Route::is('about') ? 'active' : '' }}
            ">About Us</a>
        </div>
    </nav>
</header>