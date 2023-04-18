<?php

use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-livewire', function () {
    return view('livewire.test-component');
});