<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'admindashboard']);

Route::get('/show_user', [AdminController::class, 'show_user']);

Route::get('/delivered/{id}', [AdminController::class, 'delivered']);

