<?php

// use App\Http\Controllers\HomeController;

use App\Http\Controllers\Website\CategoryController;
use App\Http\Controllers\Website\ServiceController;
use App\Models\AboutSetting;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Gallery;
use App\Models\HomePage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    $category = Category::with(['services'])->get();
    $settings = HomePage::find(1);
    return view('website.pages.home' , compact('category' ,'settings'));
});
Route::get('/about', function () {
    $settings = AboutSetting::find(1);
    $settings2 = HomePage::find(1);

    $gallery = Gallery::where('gallery_category_id', $settings->gallery_id)
    ->limit(3)
    ->get();

    $gallery2 = Gallery::where('gallery_category_id', $settings->gallery_value_id)->get();
    // dd($gallery);
    return view('website.pages.about' , compact('settings' ,'gallery', 'settings2', 'gallery2'));
});
Route::get('/certificate', function () {
    $settings = Certificate::find(1);
    $settings2 = AboutSetting::find(1);
    $gallery = Gallery::where('gallery_category_id' ,$settings->gallery)->get();
    return view('website.pages.certificate' , compact('settings','gallery', 'settings2'));
})->name('certificate');
Route::get('/contact', function () {
    $settings = AboutSetting::find(1);
    return view('website.pages.contact', ['settings' => $settings]);
})->name('contact');
Route::get('/services', function () {
    $settings = AboutSetting::find(1);
    return view('website.pages.services', ['settings' => $settings]);
})->name('services');

Route::get('/category-details/{id}' , [CategoryController::class , 'category'])->name('website.category.details');

Route::get('/service-details/{id}' , [ServiceController::class , 'getService'])->name('website.service.details');
