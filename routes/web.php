<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;

Route::post('language-switch', [LanguageController::class, 'switchLanguage'])->name('language.switch');

Route::group([
    'middleware' => 'locale',
], function () {
//service
    Route::get('/service', [ServiceController::class, 'index'])->name('service');

//contact page
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//HomeController
    Route::get('/', [HomeController::class, 'index']);

    Route::get('/about', [HomeController::class, 'about'])->name('about');

    Route::get('/aboutUs', [HomeController::class, 'aboutUs'])->name('aboutUs');

    Route::get('/project', [HomeController::class, 'project'])->name('project');

    Route::get('/projects', function () {
        return view('projects');
    })->name('projects');

});
