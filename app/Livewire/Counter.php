<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name = "Muzaffar Shaikh";
    public function render()
    {
        return view('livewire.counter');
    }
}
