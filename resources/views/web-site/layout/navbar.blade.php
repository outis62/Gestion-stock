<div class="container">
    <a class="navbar-brand" href="index.html">
        <img src="{{ asset('assets/images/logo_v1.png') }}" class="card-logo card-logo-dark" alt="logo dark"
            height="50">
        <img src="{{ asset('assets/images/logo_v1.png') }}" class="card-logo card-logo-light" alt="logo light"
            height="50">
    </a>
    <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="mdi mdi-menu"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
            <li class="nav-item">
                <a class="nav-link fs-15 fw-semibold active" href="#hero">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-15 fw-semibold" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-15 fw-semibold" href="#features">A propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-15 fw-semibold" href="#contact">Contact</a>
            </li>
        </ul>
        <div class="">

                <a href="{{ route('login') }}" class="btn border-pill border-success btn-outline-light fw-medium text-decoration-none text-success">Connexion</a>

        </div>
    </div>
</div>
