<?php
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\RentController;
    use App\Http\Controllers\SaleController;
    use App\Http\Controllers\CardController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/rent', [RentController::class, "index"])->name('rent');
    Route::get('/sale', [SaleController::class, "index"])->name('sale');
    Route::get('/card', [CardController::class, "index"])->name('card');
