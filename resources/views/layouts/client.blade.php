<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <livewire:client.navigation />
        
        <div class="dark:bg-gray-900">
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
        <livewire:client.footer />

        @stack('modals')

        @livewireScripts
    </body>
</html>
