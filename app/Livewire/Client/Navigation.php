<?php

namespace App\Livewire\Client;

use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        return <<<'HTML'
        <nav x-data="{ open: false }" class="w-full sticky top-0 bg-white/80 backdrop-blur-sm dark:bg-slate-900">
            <div class="p-3 pl-5 max-w-7xl mx-auto md:px-10 md:py-3 flex items-center gap-5 justify-between relative">
                <!-- Logo -->
                <a href="{{ route('client.home') }}" class="dark:text-white ">
                    <img src="" alt="Amazing View Logo">
                </a>

                <!-- Desktop Navigation -->
                <ul class="hidden md:flex absolute left-1/2" style="transform: translateX(-50%);">
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

                <!-- Book a Room -->
                <x-button class="hidden md:block">
                    {{ __('Book Now') }}
                </x-button>

                <!-- Mobile Nav. Button Toggler -->
                <button @click="open = true" class="md:hidden flex flex-col items-center justify-center gap-1 w-10 h-10 rounded-md">
                    <span class="w-1/2 h-[1px] rounded-full bg-black dark:bg-white"></span>
                    <span class="w-1/2 h-[1px] rounded-full bg-black dark:bg-white"></span>
                    <span class="w-1/2 h-[1px] rounded-full bg-black dark:bg-white"></span>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div x-show="open"
                @click.outside="open = false" 
                x-transition
                class="h-screen backdrop-blur-sm w-3/4 md:hidden bg-white/85 dark:bg-slate-900/85 shadow-xl fixed top-0 right-0 z-50">
                <div class="p-3 pl-5 border-b flex items-center justify-between">
                    <h2 class="text-xs dark:text-white">Main Menu</h2>

                    <!-- Close Button -->
                    <button @click="open = false" class="w-10 h-10 flex flex-col items-center justify-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black dark:fill-white"><path d="m256-236-20-20 224-224-224-224 20-20 224 224 224-224 20 20-224 224 224 224-20 20-224-224-224 224Z"/></svg>
                    </button>
                </div>

                <ul class="mt-5 pl-5">
                    <li class="mb-5">
                        <livewire:client.nav-link link="Home" to="client.home" />
                    </li>
                    <li class="mb-5">
                        <livewire:client.nav-link link="Rooms" to="client.rooms" />
                    </li>
                    <li class="mb-5">
                        <livewire:client.nav-link link="About" to="client.about" />
                    </li>
                    <li class="mb-5">
                        <livewire:client.nav-link link="Contact" to="client.contact" />
                    </li>
                </ul>
            </div>
        </nav>
        HTML;
    }
}
