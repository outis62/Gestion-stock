<?php

namespace App\Http\Livewire\Collecte;

use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $addRoute;
    public $viewRoute;
    public $importExcel;
    public function render()
    {
        return view('livewire.collecte.index');
    }
}
