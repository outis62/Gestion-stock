<?php

namespace App\Http\Livewire\Institut;

use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $addRoute;
    public $viewRoute;

    public function render()
    {
        return view('livewire.institut.index');
    }
}