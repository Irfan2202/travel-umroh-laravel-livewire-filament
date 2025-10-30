<div>
    @foreach ($prices as $price)
        <p>Type: {{ $price->type }}</p>
        <p>Price: Rp{{ number_format($price->price, 0, ',', '.') }}</p>
        <hr>
    @endforeach
</div>
