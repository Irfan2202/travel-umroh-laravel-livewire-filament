<div class="row">
    @foreach ($packages as $package)
        <div class="col-lg-4 g-4">
            <div class="card">
                <small class="badge bg-primary position-absolute m-2">
                    <i class="bi bi-calendar-event me-1"></i>
                    {{ $package->duration_days }} Hari
                </small>
                <img src="{{ asset('storage/' . $package->image) }}" alt="Gambar Paket">

                <div class="card-body">
                    <h5 class="card-title">{{ $package->title }}</h5>
                    <p class="card-text">{{ $package->description }}</p>
                    <ul class="package-icon">
                        <li><i class="bi bi-check "></i>
                            {{ $package->hotel_stars }}
                        </li>
                        <li><i class="bi bi-check"></i>
                            {{ $package->departure_location }}
                        </li>
                        <li><i class="bi bi-check"></i>
                            {{ $package->airline }}
                        </li>
                        <li><i class="bi bi-check"></i>{{ $package->available_pax }} </li>
                    </ul>
                    <div class="mt-3">
                        <p class="mb-0">Mulai dari</p>
                        <h4 class="fw-bold text-lead mb-0">Rp {{ number_format($prices->price, 0, ',', '.') }}</h4>
                        <p class="text-muted mt-0 mb-0">per jamaah</p>
                    </div>
                    <div class="d-flex flex-column gap-2 mt-3">
                        <a href="{{ route('packages.detail-packages', $package->id) }}" class="btn btn-gold">Lihat
                            Detail</a>
                        <a href="#" class="btn btn-outline-success">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
