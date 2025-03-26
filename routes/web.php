<?php

use Illuminate\Support\Facades\Route;

Route::view('/', view:'home');

Route::view(uri:'/login', view:'login');

Route::view(uri:'/about', view:'about');

Route::view(uri:'/contact', view:'contact');
