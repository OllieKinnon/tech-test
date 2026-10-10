<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Your routes go here.
Route::get('/', [CustomerController::class, 'create'])
    ->name('customers.create');

Route::post('/', [CustomerController::class, 'store'])
    ->name('customers.store');