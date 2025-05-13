<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('learning', 'learning');

Route::view('learning2', 'learning2');

Route::view('learning3', 'learning3');
