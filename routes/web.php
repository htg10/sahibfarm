<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/about-us', [HomeController::class, 'aboutus']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/destination-wedding', [HomeController::class, 'destinationWedding']);
