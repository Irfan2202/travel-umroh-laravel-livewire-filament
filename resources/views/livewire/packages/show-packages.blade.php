<div class="row">
    @foreach ($packages as $package)
        <div class="col">
            <div class="card">
                {{ $package->duration_days }} Hari
                <img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $package->title }}</h5>
                    <p class="card-text">{{ $package->description }}</p>
                    <ul>
                        <li>
                            {{ $package->hotel_stars }}
                        </li>
                        <li>
                            {{ $package->departure_location }}
                        </li>
                        <li>
                            {{ $package->airline }}
                        </li>
                        <li> {{ $package->available_pax }} </li>

                        <li>{{ $prices->type }}: Rp {{ number_format($prices->price, 0, ',', '.') }}</li>

                    </ul>
                    <a href="{{ route('packages.detail-packages', $package->id) }}" class="btn btn-primary">LIhat
                        Detail</a>
                    <a href="#" class="btn btn-outline-success">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    @endforeach

</div>
