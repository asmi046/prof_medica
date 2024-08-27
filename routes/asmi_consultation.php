<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Senders\SenderRentController;

Route::post('/send_rent', [SenderRentController::class, "send_rent"])->name('send_rent');
Route::get('/thencs_consult', [SenderRentController::class, "show_thencs"])->name('thencs_consult');
