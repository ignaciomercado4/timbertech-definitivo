<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand josefin fw-bold" href="{{ url('') }}">TimberTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item">
                        <span class="nav-link">¡Hola, <span class="fw-bold">{{ Auth::user()->name }}</span>!</span>
                    </li>
                    <li class="nav-item">
                        <button type="submit" onclick="window.location.href = '{{ url("logout") }}'" class="btn btn-link nav-link">Cerrar sesión</button>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>