<div>
    <div class="min-h-screen">
        <div class="max-w-7xl mx-auto p-3 py-20 grid lg:grid-cols-2 lg:gap-20">
            {{-- Greetings --}}
            <div class="p-3 md:pt-20 lg:py-40">
                <h1 class="dark:text-white font-semibold">
                    <div class="text-3xl md:text-4xl lg:text-5xl">Got any business idea?</div>
                    <div class="text-4xl md:text-5xl lg:text-6xl">Send an email!</div>
                </h1>
    
                <p class="mt-5 max-w-md">You may reach us at the following phone numbers or you may opt to send an email using the given form.</p>
    
                <ul class="mt-5">
                    <li class="flex gap-5 items-center">
                        <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                        <p>+63 917 139 9334</p>
                    </li>
                    <li class="flex gap-5 items-center">
                        <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                        <p>+63 905 162 0527</p>
                    </li>
                    <li class="flex gap-5 items-center">
                        <div class="w-5 h-[1px] bg-black dark:bg-white/50"></div>
                        <p>+63 945 132 0863</p>
                    </li>
                </ul>
            </div>
    
            {{-- Form --}}
            <form action="" method="post" class="p-3 md:pb-20 lg:py-40">
                <x-label for="email">Your email address</x-label>
                <x-input id="email" type="text" class="w-full mt-3" placeholder="hello@mail.com"></x-input>
                
                <x-label for="subject" class="mt-5">Email subject or topic</x-label>
                <x-input id="subject" type="text" class="w-full mt-3" placeholder="What you want to talk about?"></x-input>
                
                <x-label for="message" class="mt-5">Your message</x-label>
                <x-textarea id="message" name="" class="w-full mt-3 h-32 resize-none">Share your idea!</x-textarea>

                <x-button class="mt-5">
                    {{ __('Send Email')}}
                </x-button>
            </form>
        </div>
    </div>
</div>
