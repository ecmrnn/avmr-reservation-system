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

        <!-- Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@200" rel="stylesheet" />

    </head>
    <body class="font-sans antialiased">
        <livewire:client.navigation />
        
        <div>
            <!-- Page Content -->
            <main class="min-h-screen bg-slate-200 dark:bg-slate-900 dark:text-white">
                {{ $slot }}
            </main>
        </div>
        
        <livewire:client.footer />

        @stack('modals')

        @livewireScripts
    </body>
</html>
