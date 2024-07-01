<?php

namespace App\Http\Livewire\Collecte\DetailCollecte;

use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $addRoute;
    public $viewRoute;
    public function render()
    {
        return view('livewire.collecte.detail-collecte.index');
    }
}
