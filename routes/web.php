<?php

use Illuminate\Support\Facades\Route;

// Your routes go here.
Route::view('/', 'customers.create')
    ->name('customers.create');