<?php

namespace App\Livewire\Packages;

use App\Models\Price;
use Livewire\Component;
use App\Models\Package;

class DetailPackages extends Component
{
    public $package;

    public function mount($id)
    {
        $this->package = Package::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.packages.detail-packages', [
            'packages' => Package::all(),
            'prices' => Price::find(1)
        ]);
    }
}
