<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
// Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
// Route::post('/customers', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::resource('/akun',\App\Http\Controllers\CustomerController::class);
Route::resource('kamar',\App\Http\Controllers\KamarController::class);
