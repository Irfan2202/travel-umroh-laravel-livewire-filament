<?php

namespace App\Livewire\Packages;

use App\Models\Prices;
use Livewire\Component;
use App\Models\Packages;

class ShowPackages extends Component
{
    public function render()
    {
        return view('livewire.packages.show-packages', [
            'packages' => Packages::all(),
            'prices' => Prices::find(1)
        ]);
    }
}
