<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Home\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});
