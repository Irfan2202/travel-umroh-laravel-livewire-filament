<?php

namespace App\Livewire\Prices;

use App\Models\Price;
use Livewire\Component;

class ShowPrice extends Component
{
    public function render()
    {
        $prices = Price::all();
        return view('livewire.prices.show-price', compact('prices'));
    }
}
