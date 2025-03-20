<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/second', function () {
//     return view('second');
// });

Route::view(uri:'/second', view:'second'); //Simpler sintax
