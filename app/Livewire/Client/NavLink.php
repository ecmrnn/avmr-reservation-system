<?php

namespace App\Livewire\Client;

use Livewire\Component;

class NavLink extends Component
{
    public $link = '';
    public $to = '';
    public $external = '';

    public function mount($link, $to, $external = null)
    {
        $this->link = $link;
        $this->to = $to;
        $this->external = $external;
    }

    public function render()
    {
        return <<<'HTML'
            <a 
                href="{{ empty($external) ? route($to) : $to }}"
                target="{{ empty($external) ? '_self' : '_blank' }}"
                class="p-1 md:px-4 block font-semibold text-sm rounded-md w-min
                {{ request()->routeIs($to) ? 'text-sky-500' : '' }}" 
                wire:navigate>
                {{ $link }}
            </a>
        HTML;
    }
}
