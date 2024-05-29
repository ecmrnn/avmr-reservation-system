<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.client')]
class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact');
    }
}
