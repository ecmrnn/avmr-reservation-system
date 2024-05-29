<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Index;
use App\Livewire\Rooms;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function () {
    Route::get('/', Index::class)->name('home');
    Route::get('/rooms', Rooms::class)->name('rooms');
    Route::get('/about', About::class)->name('about');
    Route::get('/contact', Contact::class)->name('contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
