<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get("/",[ProductController::class,'index']);
Route::get("products/create",[ProductController::class,'create']);
Route::post("products/store",[ProductController::class,'store']);
Route::get("products/show",[ProductController::class,'show']);