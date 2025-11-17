<nav class="navbar navbar-expand-lg bg-body-transparent py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <div>
                <div class="fw-bold fs-5">Al-Madinah Travel</div>
                <small>Travel Haji & Umroh</small>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @include('components.nav-links')
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-sm btn-secondary rounded-pill" id="themeToggle">
                    <i class="bi bi-moon" id="themeIcon"></i>
                </button>
                <a href="{{ filament()->getLoginUrl() }}" class="btn btn-gold btn-sm rounded-pill">
                    <i class="bi bi-telephone-fill me-1"></i>
                    Masuk / Daftar
                </a>
            </div>
        </div>
    </div>
</nav>
