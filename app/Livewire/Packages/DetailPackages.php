<?php

namespace App\Livewire\Packages;

use Livewire\Component;
use App\Models\Packages;

class DetailPackages extends Component
{
    public $package;

    public function mount($id)
    {
        $this->package = Packages::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.packages.detail-packages', [
            'package' => $this->package
        ]);
    }
}
