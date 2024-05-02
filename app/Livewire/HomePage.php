<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Inicio - Electricidad La Unión')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}
