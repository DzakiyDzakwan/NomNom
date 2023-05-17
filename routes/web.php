<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', App\Http\Livewire\FullPage\LandingPage::class)->name('landing-page');
Route::get('create', App\Http\Livewire\FullPage\CreateRecipe::class)->name('create-recipe');
Route::get('profile', App\Http\Livewire\FullPage\ProfilePage::class)->name('profile-page');