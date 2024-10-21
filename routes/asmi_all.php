<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\ProductRentalController;

Route::get('/', [IndexController::class, "index"])->name('home');

Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');

Route::get('/page/{slug}', [PageController::class, "index"])->name('page');

Route::get('/catalog_for_bay', [CategoryController::class, "catalog_for_bay"])->name('catalog_for_bay');
Route::get('/catalog_for_bay/{cat}', [CategoryController::class, "category"])->name('category');
Route::get('/product/{slug}', [CategoryController::class, "bay_product"])->name('bay_product');

Route::get('/rent_catalog', [ProductRentalController::class, "rent_catalog"])->name('rent_catalog');
Route::get('/rent_catalog/{slug}', [ProductRentalController::class, "rent_product"])->name('rent_product');

Route::get('/rent', [RentController::class, "index"])->name('rent');
Route::get('/sale', [SaleController::class, "index"])->name('sale');
Route::get('/card', [CardController::class, "index"])->name('card');

Route::get('/cache_clear', function() {
    Artisan::call('optimize:clear');
    return Redirect::back()->with('msg', 'Кеш сброшен');
})->name('cache_clear');
