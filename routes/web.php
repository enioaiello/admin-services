<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/loading', function () {
    return view('loading');
});
Route::get('/test', function () {
    return view('test');
})
