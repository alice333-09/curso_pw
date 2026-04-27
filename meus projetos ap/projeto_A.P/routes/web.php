<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/category',[CategoryController::class, 'index']);