<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontpage\TourController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontpage\AboutController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Frontpage\BicycleController;
use App\Http\Controllers\Frontpage\GalleryController;
use App\Http\Controllers\Frontpage\CertificationController;
use App\Http\Controllers\Frontpage\TestimonialController;

Route::name('frontpage.')->group(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('about', AboutController::class)->name('about');
    Route::get('tour', TourController::class)->name('tour');
    Route::get('bicycle', BicycleController::class)->name('bicycle');
    Route::get('gallery', GalleryController::class)->name('gallery');
    Route::get('certification', CertificationController::class)->name('certification');
    Route::get('testimonial', TestimonialController::class)->name('testimonial');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'auth'])->name('login.auth');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
