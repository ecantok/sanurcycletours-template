<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontpage\TourController;
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
    Route::get('tour/{tour:slug}', [TourController::class, 'detail'])->name('tour.detail');

    Route::get('bicycle', BicycleController::class)->name('bicycle');
    Route::get('gallery', GalleryController::class)->name('gallery');
    Route::get('certification', CertificationController::class)->name('certification');
    Route::get('testimonial', TestimonialController::class)->name('testimonial');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'auth'])->name('login.auth');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', fn () => redirect()->route('admin.tour.index'));

    Route::get('tour', [\App\Http\Controllers\Admin\Tour\TourController::class, 'index'])->name('tour.index');
    Route::get('tour/add', [\App\Http\Controllers\Admin\Tour\TourController::class, 'add'])->name('tour.add');
    Route::post('tour/add', [\App\Http\Controllers\Admin\Tour\TourController::class, 'store'])->name('tour.store');
    Route::get('tour/{tour:slug}', [\App\Http\Controllers\Admin\Tour\TourController::class, 'show'])->name('tour.show');
    Route::get('tour/{tour:slug}/edit', [\App\Http\Controllers\Admin\Tour\TourController::class, 'edit'])->name('tour.edit');
    Route::patch('tour/{tour:slug}/edit', [\App\Http\Controllers\Admin\Tour\TourController::class, 'update'])->name('tour.update');
    Route::delete('tour/{tour:slug}/delete', [\App\Http\Controllers\Admin\Tour\TourController::class, 'delete'])->name('tour.delete');

    Route::get('image/{image:id}/delete', [\App\Http\Controllers\Admin\Image\ImageController::class, 'delete'])->name('image.delete');
});
