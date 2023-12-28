<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get("/",[ProductController::class,'index']);
Route::get("products/create",[ProductController::class,'create']);
Route::get("products/store",[ProductController::class,'store']);