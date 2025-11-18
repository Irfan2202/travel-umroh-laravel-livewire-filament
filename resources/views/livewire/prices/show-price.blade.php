<div class="container my-4">
    <div class="row g-4">
        @foreach ($prices as $price)
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 rounded-4 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">{{ $price->type }}</h5>

                        <p class="card-text mt-2">
                            <strong>Harga:</strong><br>
                            Rp {{ number_format($price->amount, 0, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
