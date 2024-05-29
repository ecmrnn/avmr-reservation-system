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
                class="p-1 md:px-4 block hover:text-sky-500 font-semibold text-sm rounded-md w-min
                {{ request()->routeIs($to) ? 'text-sky-500' : 'dark:text-white' }}" 
                wire:navigate>
                {{ $link }}
            </a>
        HTML;
    }
}
