<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::welcome');

Route::prefix('english-education')->group(function(){
    Route::livewire('/', 'pages::english-education.index');
});

Route::prefix('social-humanities')->group(function(){
    Route::livewire('/', 'pages::social-humanities.index');
});


