<?php

namespace App\Http\Livewire\Collecte\DetailCollecte;

use Livewire\Component;

class Show extends Component
{
    public $detailCollecte;
    public $detailCollectes;
    public function render()
    {
        return view('livewire.collecte.detail-collecte.show');
    }
}
