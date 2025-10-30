<?php

namespace App\Livewire\Packages;

use App\Models\Price;
use Livewire\Component;
use App\Models\Package;

class ShowPackages extends Component
{
    public function render()
    {
        return view('livewire.packages.show-packages', [
            'packages' => Package::all(),
            'prices' => Price::find(1)
        ]);
    }
}
