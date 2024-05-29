<?php

namespace App\Livewire\Client;

use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        return <<<'HTML'
        <nav x-data="{ open: false }">
            <div class="p-3 pl-5 md:px-10 md:py-5 flex items-center gap-5 justify-between">
                <!-- Logo -->
                <a href="{{ route('client.home') }}">
                    <img src="" alt="Amazing View Logo">
                </a>

                <!-- Desktop Navigation -->
                <ul class="hidden md:flex gap-5">
                    <li>
                        <livewire:client.nav-link link="Home" to="client.home" />
                    </li>
                    <li>
                        <livewire:client.nav-link link="Rooms" to="client.rooms" />
                    </li>
                    <li>
                        <livewire:client.nav-link link="About" to="client.about" />
                    </li>
                    <li>
                        <livewire:client.nav-link link="Contact" to="client.contact" />
                    </li>
                </ul>

                <!-- Mobile Nav. Button Toggler -->
                <button @click="open = true" class="md:hidden flex flex-col items-center justify-center gap-1 w-10 h-10 rounded-md">
                    <span class="w-1/2 h-[1px] rounded-full bg-black"></span>
                    <span class="w-1/2 h-[1px] rounded-full bg-black"></span>
                    <span class="w-1/2 h-[1px] rounded-full bg-black"></span>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div x-show="open"
                @click.outside="open = false" 
                x-transition
                class="h-screen w-3/4 md:hidden bg-white shadow-xl fixed top-0 right-0 z-50">
                <div class="p-3 pl-5 border-b flex items-center justify-between">
                    <h2 class="text-xs">Main Menu</h2>

                    <!-- Close Button -->
                    <button @click="open = false" class="w-10 h-10 flex flex-col items-center justify-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="m256-236-20-20 224-224-224-224 20-20 224 224 224-224 20 20-224 224 224 224-20 20-224-224-224 224Z"/></svg>
                    </button>
                </div>

                <ul class="pl-5">
                    <li>
                        <livewire:client.nav-link link="Home" to="client.home" />
                    </li>
                    <li>
                        <livewire:client.nav-link link="Rooms" to="client.rooms" />
                    </li>
                    <li>
                        <livewire:client.nav-link link="About" to="client.about" />
                    </li>
                    <li>
                        <livewire:client.nav-link link="Contact" to="client.contact" />
                    </li>
                </ul>
            </div>
        </nav>
        HTML;
    }
}
