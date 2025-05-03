<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('/about', fn() => view('about'));

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/project', [ProjectController::class, 'index'])->name('project');