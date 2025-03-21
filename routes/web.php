<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view(uri:'/home', view:'home');

Route::view(uri:'/login', view:'login'); //Simpler sintax
