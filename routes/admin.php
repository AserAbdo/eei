<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CertificateSettings;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MediaGalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard.pages.dashboard');
    })->name('admin.dashboard');

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.list');

        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/create', [CategoryController::class, 'store'])->name('categories.store');

        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/edit/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

        Route::get('/deleted', [CategoryController::class, 'getTranshed'])->name('categories.deleted');
        Route::get('/restore/{id}', [CategoryController::class, 'unsetDeletedAt'])->name('categories.restore');
    });

    Route::prefix('services')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('service.list');
        Route::get('/create', [ServiceController::class, 'create'])->name('service.create');
        Route::post('/create', [ServiceController::class, 'store'])->name('store.service');

        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');

        Route::post('/edit/{id}', [ServiceController::class, 'update'])->name('service.update');
        Route::delete('/destroy/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');

        Route::get('/deleted', function () {
            return view('dashboard.pages.services.deleted');
        })->name('units.deleted');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.list');

        Route::get('/create-category', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/create-category', [CategoryController::class, 'store'])->name('category.store');

        Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');

        Route::post('/category-edit/{id}', [CategoryController::class, 'update'])->name('category.update');

        Route::delete('/category-delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });

    Route::prefix('gallery')->group(function () {

        Route::get('/categories', [MediaGalleryController::class, 'index'])->name('media.gallery.categories');

        Route::get('/create-category', [MediaGalleryController::class, 'create'])->name('media.gallery.categories.create');
        Route::post('/create-category', [MediaGalleryController::class, 'store'])->name('media.gallery.categories.store');

        Route::get('/', [GalleryController::class, 'index'])->name('list.media');

        Route::get('/upload-media', [GalleryController::class, 'create'])->name('upload.media');
        Route::post('/upload-media', [GalleryController::class, 'store'])->name('store.media');
        Route::get('/gallery/restore/{id}', [GalleryController::class, 'restore'])->name('gallery.restore');
        Route::delete('/delete/{id}', [GalleryController::class, 'destroy'])->name('delete.media');
        Route::get('/update/{id}', [GalleryController::class, 'edit'])->name('update.media');
        Route::post('/save/{id}', [GalleryController::class, 'update'])->name('save.media');

        Route::get('/deleted', [GalleryController::class, 'deleted'])->name('deleted.media');
    });
    Route::prefix('partners')->group(function () {

        route::get('/', [PartnerController::class, 'index'])->name('partners.list');

        Route::get('/create', [PartnerController::class, 'create'])->name('partners.create');

        Route::post('/create', [PartnerController::class, 'store'])->name('partners.store');

        Route::delete('/destroy/{id}', [PartnerController::class, 'destroy'])->name('partners.destroy');

        Route::get('/deleted', [PartnerController::class, 'deleted'])->name('partners.deleted');
        Route::delete('/restore/{id}', [PartnerController::class, 'restore'])->name('partners.restore');
    });
    Route::prefix('pages')->group(function () {
        Route::get('/', function () {
            return view('dashboard.pages.subpages.list');
        })->name('subpages.list');
    });

    Route::prefix('settings')->group(function () {

        Route::get('/site', [SettingController::class, 'index'])->name('settings.index');
        Route::post('/site/update', [SettingController::class, 'update'])->name('settings.update');

        Route::get('/about-settings', [AboutController::class, 'index'])->name('about.index');
        Route::post('/about/update', [AboutController::class, 'update'])->name('about.update');

        Route::get('/certificate', [CertificateSettings::class, 'index'])->name('certificate.index');
        Route::post('/certificate/update', [CertificateSettings::class, 'update'])->name('certificate.update');

        Route::get('/home', [HomePageController::class, 'index'])->name('setting.home');
        // Route::post('/' , SettingController::class , 'store')->name('settings.store');
        Route::post('/', [HomePageController::class, 'update'])->name('home.update');


        Route::get('/contact', function () {
            return view('dashboard.pages.settings.contact-settings');
        })->name('contact-settings');
    });


    Route::prefix('staff')->group(function () {

        Route::get('/', [StaffController::class, 'index'])->name('staff.list');

        Route::get('/create', [StaffController::class, 'create'])->name('staff.create');

        Route::post('/create', [StaffController::class, 'store'])->name('staff.store');

        Route::delete('/destroy/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');

        Route::get('/deleted', [StaffController::class, 'deleted'])->name('staff.deleted');
    });

    Route::get('/logs', function () {
        return view('dashboard.pages.logs.list');
    })->name('logs.list');
});
