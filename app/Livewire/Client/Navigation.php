<?php

namespace App\Livewire\Client;

use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        return <<<'HTML'
        <nav class="flex items-center justify-between">
            <div>
                <a href="">
                    <img src="" alt="Amazing View Logo">
                </a>
            </div>

            <ul class="flex gap-2">
                <li><a href="{{ route('client.home') }}" wire:navigate>Home</a></li>
                <li><a href="{{ route('client.rooms') }}" wire:navigate>Rooms</a></li>
                <li><a href="{{ route('client.about') }}" wire:navigate>About</a></li>
                <li><a href="{{ route('client.contact') }}" wire:navigate>Contact</a></li>
            </ul>
        </nav>
        HTML;
    }
}
