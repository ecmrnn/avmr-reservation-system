<div>
    {{-- Hero --}}
    <div class="min-h-screen relative border-b dark:border-b-white/25">
        {{--  --}}
        <div class="p-3 py-40 max-w-7xl md:mx-auto relative text-center md:text-left">
            <h1 class="text-3xl md:text-6xl lg:text-8xl dark:text-white font-semibold">
                <div>Luxurious Feel,</div>
                <div>Choose Amazing!</div>
            </h1>
            <p class="mt-5 lg:font-semibold lg:text-xl max-w-md mx-auto md:mx-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, qui.</p>

            <a href="#our-rooms" class="mt-5 mx-auto md:mx-0 rounded-full border border-black dark:border-white w-12 aspect-square grid place-items-center group hover:mt-7 transition-all ease-in-out">
                <span class="material-symbols-outlined">arrow_downward_alt</span>
            </a>
        </div>
        {{--  --}}
        <section class="w-full absolute bottom-0">
            <div class="p-3 md:py-20 max-w-md md:max-w-7xl mx-auto grid md:grid-cols-3 gap-5">
                <div class="grid grid-cols-2 gap-5 md:col-span-2">
                    <div class="aspect-video rounded-md bg-white dark:bg-slate-200"></div>
                    <div class="aspect-video rounded-md bg-white dark:bg-slate-200"></div>
                </div>
                <div class="aspect-video rounded-md bg-white dark:bg-slate-200"></div>
            </div>
        </section>
    </div>

    {{-- Available Rooms --}}
    <section id="our-rooms" class="min-h-screen bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto p-3 py-20">
            <h2 class="text-3xl font-semibold text-center md:text-left">Our Rooms</h2>
            <p class="text-center md:text-left">Experience elegant comfort through our rooms</p>
            
            <div class="mt-5 md:space-y-4">
                <article class="p-3 mx-auto flex flex-col md:flex-row gap-5 border border-transparent hover:scale-[1.01] hover:bg-slate-50 hover:border-slate-200 dark:hover:bg-slate-800/25 dark:hover:border-slate-800 rounded-md transition-all ease-in-out">
                    <div class="bg-slate-200 h-52 rounded-md aspect-video flex-shrink-0">
                        <img src="" alt="Room Image">
                    </div>
                    
                    <div>
                        <div class="flex justify-between items-start gap-5">
                            <div>
                                <h3 class="text-2xl font-semibold">La Terraza Rooms</h3>
                                <div class="flex gap-5 items-center">
                                    <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                                    <span class="text-sm">10 Available Rooms</span>
                                </div>
                            </div>

                            <x-button>
                                {{ __('Book this room') }}
                            </x-button>
                        </div>
                        
                        <div class="mt-5 grid md:grid-cols-2 gap-5 md:gap-10">
                            <div>
                                <h4 class="font-semibold">About the room</h4>
                                <p class="mt-5 text-justify">The Family Room at our resort is a spacious and comfortable accommodation, featuring two &lpar;2&rpar; beds and one &lpar;1&rpar; bathroom.</p>
                            </div>

                            <div>
                                <h4 class="font-semibold">Amenities</h4>
                                <ul class="mt-5">
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">bed</span>
                                        <span>2 beds - 6 beds</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">shower</span>
                                        <span>1 shower with toiletries</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">credit_card</span>
                                        <span>3,000.00 Php - 4,000.00 Php</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                
                <article class="p-3 mx-auto flex flex-col md:flex-row gap-5 border border-transparent hover:scale-[1.01] hover:bg-slate-50 hover:border-slate-200 dark:hover:bg-slate-800/25 dark:hover:border-slate-800 rounded-md transition-all ease-in-out">
                    <div class="bg-slate-200 h-52 rounded-md aspect-video flex-shrink-0">
                        <img src="" alt="Room Image">
                    </div>
                    
                    <div>
                        <div class="flex justify-between items-start gap-5">
                            <div>
                                <h3 class="text-2xl font-semibold">Cabana Rooms</h3>
                                <div class="flex gap-5 items-center">
                                    <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                                    <span class="text-sm">10 Available Rooms</span>
                                </div>
                            </div>

                            <x-button>
                                {{ __('Book this room') }}
                            </x-button>
                        </div>
                        
                        <div class="mt-5 grid md:grid-cols-2 gap-10">
                            <div>
                                <h4 class="font-semibold">About the room</h4>
                                <p class="mt-5 text-justify">The Large Family Room is equipped with one &lpar;1&rpar; shower and one &lpar;1&rpar; beds to six &lpar;6&rpar; single bunk beds that could accommodate twelve &lpar;12&rpar; person </p>
                            </div>

                            <div>
                                <h4 class="font-semibold">Amenities</h4>
                                <ul class="mt-5">
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">bed</span>
                                        <span>1 bed - 6 beds</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">shower</span>
                                        <span>1 shower with toiletries</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">credit_card</span>
                                        <span>2,800.00 Php - 7,800.00 Php</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="p-3 mx-auto flex flex-col md:flex-row gap-5 border border-transparent hover:scale-[1.01] hover:bg-slate-50 hover:border-slate-200 dark:hover:bg-slate-800/25 dark:hover:border-slate-800 rounded-md transition-all ease-in-out">
                    <div class="bg-slate-200 h-52 rounded-md aspect-video flex-shrink-0">
                        <img src="" alt="Room Image">
                    </div>
                    
                    <div>
                        <div class="flex justify-between items-start gap-5">
                            <div>
                                <h3 class="text-2xl font-semibold">Pandan Villa</h3>
                                <div class="flex gap-5 items-center">
                                    <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                                    <span class="text-sm">10 Available Rooms</span>
                                </div>
                            </div>

                            <x-button>
                                {{ __('Book this room') }}
                            </x-button>
                        </div>
                        
                        <div class="mt-5 grid md:grid-cols-2 gap-10">
                            <div>
                                <h4 class="font-semibold">About the room</h4>
                                <p class="mt-5 text-justify">The perfect getaway for relaxation with your partner, family, or friends. Pandan Villa rooms are equipped with beds, showers, and toiletries.</p>
                            </div>

                            <div>
                                <h4 class="font-semibold">Amenities</h4>
                                <ul class="mt-5">
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">bed</span>
                                        <span>3 beds - 10 beds</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">shower</span>
                                        <span>1 shower with toiletries</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">credit_card</span>
                                        <span>2,000.00 Php - 3,000.00 Php</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="p-3 mx-auto flex flex-col md:flex-row gap-5 border border-transparent hover:scale-[1.01] hover:bg-slate-50 hover:border-slate-200 dark:hover:bg-slate-800/25 dark:hover:border-slate-800 rounded-md transition-all ease-in-out">
                    <div class="bg-slate-200 h-52 rounded-md aspect-video flex-shrink-0">
                        <img src="" alt="Room Image">
                    </div>
                    
                    <div>
                        <div class="flex justify-between items-start gap-5">
                            <div>
                                <h3 class="text-2xl font-semibold">Bamboo Nipa Huts</h3>
                                <div class="flex gap-5 items-center">
                                    <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                                    <span class="text-sm">10 Available Rooms</span>
                                </div>
                            </div>

                            <x-button>
                                {{ __('Book this room') }}
                            </x-button>
                        </div>
                        
                        <div class="mt-5 grid md:grid-cols-2 gap-10">
                            <div>
                                <h4 class="font-semibold">About the room</h4>
                                <p class="mt-5 text-justify">Our  modest and comfortable accommodation will make you feel hugged by the  unspoiled nature. Be relaxed and treated to a goodnight sleep at our Bamboo  Nipa huts.</p>
                            </div>

                            <div>
                                <h4 class="font-semibold">Amenities</h4>
                                <ul class="mt-5">
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">bed</span>
                                        <span>2 beds</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">shower</span>
                                        <span>1 shower with toiletries</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="fill-black dark:fill-white material-symbols-outlined">credit_card</span>
                                        <span>1,200.00 Php</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>
