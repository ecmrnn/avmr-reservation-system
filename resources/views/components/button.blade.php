<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-1 bg-blue-600 text-center border border-transparent rounded-md text-sm text-white hover:bg-blue-700 focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    <span class="text-center w-full">{{ $slot }}</span>
</button>
