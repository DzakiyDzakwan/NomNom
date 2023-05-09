<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', App\Http\Livewire\FullPage\LandingPage::class)->name('landing-page');