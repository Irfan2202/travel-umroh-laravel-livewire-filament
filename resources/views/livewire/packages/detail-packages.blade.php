<section>
    <div class="row">
        <div class="col-lg-6">
            <h2>{{ $package->title }}</h2>
            <p>{{ $package->description }}</p>
        </div>
    </div>
    <livewire:prices.show-price />
    <a href="">Order sekarang</a>
</section>
