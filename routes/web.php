<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('/about', fn() => view('about'));

Route::get('/service', [ServiceController::class, 'index'])->name('service');