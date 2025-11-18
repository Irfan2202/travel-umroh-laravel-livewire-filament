<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('storage/' . $package->image) }}" class="d-block w-100 mt-5 rounded" alt="Gambar Paket">
            </div>
            <div class="col-lg-6 mt-5">
                <h2>{{ $package->title }}</h2>
                <p>{{ $package->description }}</p>
                <ul>
                    <li><strong>Deskripsi:</strong> {!! $package->description !!}</li>
                    <li><strong>Tour Guide:</strong> {{ $package->guide_name }}</li>

                    <li><strong>Hotel Makkah:</strong> {{ $package->hotel_makkah }}</li>
                    <li><strong>Hotel Madinah:</strong> {{ $package->hotel_madinah }}</li>
                    <li><strong>Bintang Hotel:</strong> {{ $package->hotel_stars }} ⭐</li>

                    <li><strong>Maskapai:</strong> {{ $package->airline }}</li>
                    <li><strong>Rute Penerbangan:</strong> {{ $package->flight_route }}</li>

                    <li><strong>Tanggal Berangkat:</strong> {{ $package->departure_date }}</li>
                    <li><strong>Tanggal Pulang:</strong> {{ $package->return_date }}</li>
                    <li><strong>Hari Keberangkatan:</strong> {{ $package->departure_day }}</li>

                    <li><strong>Lama Perjalanan:</strong> {{ $package->duration_days }} hari</li>

                    <li><strong>Total Kuota:</strong> {{ $package->total_pax }} jamaah</li>
                    <li><strong>Kuota Tersedia:</strong> {{ $package->available_pax }} jamaah</li>

                    <li><strong>Kota Keberangkatan:</strong> {{ $package->departure_location }}</li>
                </ul>
            </div>
        </div>
        <livewire:prices.show-price />
        <div class="justify-content-center align-items-center text-center mt-4 mb-5">
            <a href="{{ route('orders.index') }}" class="btn btn-gold">Order sekarang</a>
        </div>
    </div>
</section>
