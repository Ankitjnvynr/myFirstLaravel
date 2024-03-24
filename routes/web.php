<?php

use App\Http\Controllers\AnotherController;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\PhotoContoller;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');

});

Route::get('/contact', SingleActionController::class);
Route::resource('photo', PhotoContoller::class);