<?php

use App\Http\Controllers\Pages;
use App\Http\Controllers\Customers;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', [Pages::class, 'index']);
Route::get('/about', [Pages::class, 'about']);
Route::get('/customers', [Customers::class, 'index']);
Route::get('/users', [Users::class, 'index']);