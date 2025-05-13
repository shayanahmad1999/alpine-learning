<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('learning', 'learning');

Route::view('learning2', 'learning2');
