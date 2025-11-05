<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link fw-semibold" href="{{ url('/') }}">Beranda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-semibold" href="{{ url('/#about') }}">Tentang</a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-semibold" href="{{ url('/#packages') }}">Paket</a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-semibold" href="{{ url('/#testimonials') }}">Testimoni</a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-semibold" href="{{ url('/#contact') }}">Kontak</a>
    </li>
    <div class="d-flex align-items-center gap-2">
        <button class="btn btn-sm btn-secondary rounded-pill" id="themeToggle">
            <i class="bi bi-moon" id="themeIcon"></i>
        </button>
        <button class="btn btn-gold btn-sm rounded-pill">
            <i class="bi bi-telephone-fill me-1"></i>
            Masuk / Daftar
        </button>
    </div>
</ul>
