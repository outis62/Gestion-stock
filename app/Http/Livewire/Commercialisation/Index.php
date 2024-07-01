<?php

namespace App\Http\Livewire\Commercialisation;

use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $addRoute;
    public $viewRoute;
    public function render()
    {
        return view('livewire.commercialisation.index');
    }
}
