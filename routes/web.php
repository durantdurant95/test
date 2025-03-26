<?php

use Illuminate\Support\Facades\Route;

Route::view('/', view:'home');

Route::view(uri:'/login', view:'login'); //Simpler sintax
