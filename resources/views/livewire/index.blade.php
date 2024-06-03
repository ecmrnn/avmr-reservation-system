<div>
    {{-- Hero --}}
    <div class="min-h-screen relative border-b dark:border-b-white/25">
        {{--  --}}
        <div class="p-3 py-40 max-w-7xl md:mx-auto relative text-center md:text-left">
            <h1 class="text-3xl md:text-6xl lg:text-8xl dark:text-white font-semibold">
                <div>Amazing View,</div>
                <div>Amazing Experience!</div>
            </h1>
            <p class="mt-5 lg:font-semibold lg:text-xl max-w-md mx-auto md:mx-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, qui.</p>

            <a href="#our-services" class="mt-5 mx-auto md:mx-0 rounded-full border border-black dark:border-white w-12 aspect-square grid place-items-center group hover:mt-7 transition-all ease-in-out">
                <span class="material-symbols-outlined">arrow_downward_alt</span>
            </a>
        </div>
        {{--  --}}
        <section class="w-full bg-white dark:bg-slate-900 absolute bottom-0">
            <div class="p-3 md:py-20 max-w-md md:max-w-7xl mx-auto flex flex-col md:flex-row justify-between">
                <div>
                    <strong class="mt-5 inline-block">Luxurious Experience at Laguna!</strong>
        
                    <ul class="mt-2">
                        <li class="flex gap-5 items-center">
                            <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </li>
                        <li class="flex gap-5 items-center">
                            <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                            <p>Lorem, ipsum dolor.</p>
                        </li>
                        <li class="flex gap-5 items-center">
                            <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                            <p>Lorem ipsum dolor sit.</p>
                        </li>
                    </ul>
                </div>

                <div class="md:text-right">
                    <p><strong class="mt-5 inline-block">Reserve Now!</strong></p>

                    <p class="mt-2 max-w-52">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                    <x-button class="my-5">
                        {{ __('Book Now!') }}
                    </x-button>
                </div>
            </div>
        </section>
    </div>

    {{-- Featured Services --}}
    <section id="our-services" class="min-h-screen grid place-items-center bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto p-3 py-20">
            <h2 class="text-3xl font-semibold text-center md:text-left">Featured Services</h2>
            <p class="text-center md:text-left">Experience our featured services!</p>
            
            <div class="mt-5 grid md:grid-cols-3 gap-5">

                <article class="max-w-md mx-auto">
                    <div class="bg-slate-200 rounded-md aspect-video">
                        <img src="" alt="Feature Image">
                    </div>
                    
                    <div class="mt-5">
                        <div class="flex gap-5 items-center">
                            <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                            <span class="text-sm">01.</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Outdoor Activities</h3>
                        <p class="mt-5 text-justify">Immerse yourself in nature with our exciting outdoor activities. From  guided hikes to thrilling ziplining, there’s something for every  adventurer.</p>
                    </div>
                </article>
                <article class="max-w-md mx-auto">
                    <div class="bg-slate-200 rounded-md aspect-video">
                        <img src="" alt="Feature Image">
                    </div>

                    <div class="mt-5">
                        <div class="flex gap-5 items-center">
                            <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                            <span class="text-sm">02.</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Function Hall</h3>
                        <p class="mt-5 text-justify">Our elegant function hall provides the perfect venue for weddings,  conferences, and special events. With modern amenities and picturesque  views, it’s an ideal choice for gatherings.</p>
                    </div>
                </article>
                <article class="max-w-md mx-auto">
                    <div class="bg-slate-200 rounded-md aspect-video">
                        <img src="" alt="Feature Image">
                    </div>

                    <div class="mt-5">
                        <div class="flex gap-5 items-center">
                            <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                            <span class="text-sm">03.</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Outdoor Pool Facilities</h3>
                        <p class="mt-5 text-justify">Take a refreshing dip in our sparkling outdoor pool. Surrounded by lush  greenery, it’s a tranquil oasis for relaxation and sunbathing.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- Brief History --}}
    <section class="min-h-screen grid place-items-center">
        <div class="max-w-7xl mx-auto p-3 py-20 grid md:grid-cols-2 gap-5 lg:gap-20">
            <div class="aspect-square rounded-md bg-white dark:bg-slate-200">
                {{-- Image --}}
            </div>

            <div class="max-w-md md:max-w-full mx-auto">
                <h2>
                    <div class="text-3xl font-semibold">Amazing View</div>
                    <div class="text-2xl font-semibold">Mountain Resort</div>
                </h2>
                <p>Book your dream getaway!</p>

                <p class="mt-5 text-justify">Nestled amidst the rolling hills of Mabitac, Laguna, the Amazing View Mountain Resort  beckons weary souls seeking solace in nature’s embrace. The air carries  whispers of pine and adventure, urging visitors to explore its hidden  trails.</p>
                
                <x-button class="mt-5">
                    {{ __('More about our resort!') }}
                </x-button>
            </div>
        </div>
    </section>
</div>
