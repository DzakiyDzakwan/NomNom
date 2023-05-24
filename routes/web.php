<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', App\Http\Livewire\FullPage\LandingPage::class)->middleware('web')->name('landing-page');
Route::get('create-recipe', App\Http\Livewire\FullPage\CreateRecipe::class)->name('create-recipe');
Route::get('profile', App\Http\Livewire\FullPage\ProfilePage::class)->middleware('auth')->name('profile-page');
Route::get('saved-collections', App\Http\Livewire\FullPage\SavedCollections::class)->name('saved-collections');
Route::get('recipe-detail/{id}', App\Http\Livewire\FullPage\RecipeDetail::class)->name('recipe-detail');
Route::get('search-result', App\Http\Livewire\FullPage\SearchResult::class)->name('search-result');
Route::get('ingredients', App\Http\Livewire\FullPage\IngredientsPage::class)->name('ingredients-page');
Route::get('categories', App\Http\Livewire\FullPage\CategoriesPage::class)->name('categories-page');

