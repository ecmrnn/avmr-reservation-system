<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-2 bg-blue-600 text-center border border-transparent rounded-md text-sm text-white hover:bg-blue-700 focus:bg-blue-700/75 dark:focus:bg-blue-700/50 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    <span class="text-center w-full">{{ $slot }}</span>
</button>
