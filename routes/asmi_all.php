<?php
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\RentController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/rent', [RentController::class, "index"])->name('rent');
