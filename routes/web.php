<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OffersController;
use App\Http\Controllers\Admin\WebsiteBannerController;
use App\Http\Controllers\Admin\WebsiteGalleryController;
use App\Http\Controllers\Admin\WebsiteInfoController;
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
    Route::get('/balemora-special-offer', [AlmoraHomeController::class, 'specialOfferBalemoraAlmora'])->name('specialOfferBalemoraAlmora');
    Route::get('/balemora-contact', [AlmoraHomeController::class, 'contactBalemoraAlmora'])->name('contactBalemoraAlmora');
});



//balemora admin 
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProssecc'])->name('loginProcess');
    Route::middleware(['auth', 'admin.role'])->group(function (){
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        // website info
        Route::get('/website-info', [WebsiteInfoController::class, 'index'])->name('websiteInfo');
        Route::post('/website-info', [WebsiteInfoController::class, 'update'])->name('websiteInfo.update');

        // website banner
        Route::get('/website-banner', [WebsiteBannerController::class, 'index'])->name('websiteBanner');
        Route::post('/save-website-banner', [WebsiteBannerController::class, 'save'])->name('websiteBanner.save');
        Route::post('/website-banner', [WebsiteBannerController::class, 'update'])->name('websiteBanner.update');

        // gallery
        Route::get('/gallery', [WebsiteGalleryController::class, 'gallery'])->name('gallery');
        Route::post('/save-gallery', [WebsiteGalleryController::class, 'save'])->name('gallery.store');
        Route::delete('/gallery/{id}', [WebsiteGalleryController::class, 'destroy'])->name('gallery.destroy');

        // offers
        Route::get('/offers', [OffersController::class, 'offers'])->name('offers');

        // logout
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
