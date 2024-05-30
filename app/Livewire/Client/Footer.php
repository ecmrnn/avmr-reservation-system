<?php

namespace App\Livewire\Client;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return <<<'HTML'
        <footer class="bg-slate-900 text-white">
            <section class="p-3 py-10 max-w-7xl mx-auto lg:grid grid-cols-4 gap-10">
                <!--  -->
                <article class="md:border-r border-dashed border-white/50 md:pr-5">
                    <hgroup>
                        <h2>
                            <div class="text-3xl font-semibold">Amazing View</div>
                            <div class="text-2xl font-semibold">Mountain Resort</div>
                        </h2>
                    </hgroup>

                    <p class="mt-5">Where every stay becomes a story, welcome to your perfect escape!</p>

                    <x-button class="mt-5">
                        {{ __('Book Now') }}
                    </x-button>
                </article>

                <!-- Navigate Website -->
                <article class="mt-5 lg:mt-0">
                    <h2 class="text-xl font-semibold mb-5">Navigate through our site</h2>
                    <nav>
                        <ul>
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
                    </nav>
                </article>

                <!-- Social Medias -->
                <article class="mt-5 lg:mt-0">
                    <h2 class="text-xl font-semibold mb-5">Stay connected with us</h2>
                    <nav>
                        <ul>
                            <li>
                                <livewire:client.nav-link link="Facebook" to="https://www.facebook.com/amazingviewmountainresort" external="true" />
                            </li>
                            <li>
                                <livewire:client.nav-link link="Instagram" to="https://www.instagram.com/avmresort" external="true" />
                            </li>
                            <li>
                                <livewire:client.nav-link link="Youtube" to="#" external="true" />
                            </li>
                            <li>
                                <livewire:client.nav-link link="Twitter" to="#" external="true" />
                            </li>
                        </ul>
                    </nav>
                </article>

                <!-- More Contents -->
                <article class="mt-5 lg:mt-0">
                    <h2 class="text-xl font-semibold mb-5">Enjoy more of our contents!</h2>
                    <nav>
                        <ul>
                            <li>
                                <livewire:client.nav-link link="Testimonials" to="#" external="true" />
                            </li>
                            <li>
                                <livewire:client.nav-link link="Announcements" to="#" external="true" />
                            </li>
                            <li>
                                <livewire:client.nav-link link="Events" to="#" external="true" />
                            </li>
                            <li>
                                <livewire:client.nav-link link="Blogs" to="#" external="true" />
                            </li>
                        </ul>
                    </nav>
                </article>
            </section>
        </footer>
        HTML;
    }
}
