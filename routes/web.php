<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\lucknow\HomeController as LucknowHomeController;
use App\Http\Controllers\almora\HomeController as AlmoraHomeController;
use Illuminate\Support\Facades\Route;

// main route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/balemora-wellness', [HomeController::class, 'balemoraWellness'])->name('balemora-wellness');
Route::get('/about-balemora-wellness', [HomeController::class, 'aboutBalemoraWellness'])->name('aboutBalemora');
Route::get('/balemora-gallery', [HomeController::class, 'balemoraGallery'])->name('gallery');
Route::get('/balemora-special-offer', [HomeController::class, 'balemoraSpecialOffer'])->name('balemoraOffer');
Route::get('/balemora-contact', [HomeController::class, 'balemoraContact'])->name('balemoraContact');


// balemora lucknow
Route::prefix('lucknow')->group(function () {
    Route::get('/', [LucknowHomeController::class, 'lucknow'])->name('lucknow');
    Route::get('/balemora-living', [LucknowHomeController::class, 'livingBalemoraLucknow'])->name('livingBalemoraLucknow');
    Route::get('/balemora-event-celebration', [LucknowHomeController::class, 'eventCelebrationBalemoraLucknow'])->name('eventCelebrationBalemoraLucknow');
    Route::get('/balemora-gallery', [LucknowHomeController::class, 'galleryBalemoraLucknow'])->name('galleryBalemoraLucknow');
    Route::get('/balemora-special-offer', [LucknowHomeController::class, 'specialOfferBalemoraLucknow'])->name('specialOfferBalemoraLucknow');
    Route::get('/balemora-contact', [LucknowHomeController::class, 'contactBalemoraLucknow'])->name('contactBalemoraLucknow');
});


// balemora almora
Route::prefix('almora')->group(function () {
    Route::get('/', [AlmoraHomeController::class, 'index'])->name('almora');
    Route::get('/balemora-living', [AlmoraHomeController::class, 'livingBalemoraAlmora'])->name('livingBalemoraAlmora');
    Route::get('/balemora-gallery', [AlmoraHomeController::class, 'galleryBalemoraAlmora'])->name('galleryBalemoraAlmora');
});
