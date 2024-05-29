<?php

namespace App\Livewire\Client;

use Livewire\Component;

class NavLink extends Component
{
    public $link = '';
    public $to = '';

    public function mount($link, $to)
    {
        $this->link = $link;
        $this->to = $to;
    }

    public function render()
    {
        return <<<'HTML'
            <a href="{{ route($to) }}"
                class="py-3 block border-b hover:border-b-black w-min
                {{ request()->routeIs($to) ? 'border-b-black' : 'border-b-transparent' }}" 
                wire:navigate>
                {{ $link }}
            </a>
        HTML;
    }
}
