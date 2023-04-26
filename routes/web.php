<?php

use App\Http\Controllers\Frontpage\AboutController;
use App\Http\Controllers\Frontpage\BicycleController;
use App\Http\Controllers\Frontpage\TourController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('frontpage.')->group(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('about', AboutController::class)->name('about');
    Route::get('tour', TourController::class)->name('tour');
    Route::get('bicycle', BicycleController::class)->name('bicycle');
});
