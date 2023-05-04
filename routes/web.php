<?php

use Illuminate\Support\Facades\Route;





Route::get('/', 'App\Http\Livewire\Inline\TestComponent'::class)->name('landing-page');