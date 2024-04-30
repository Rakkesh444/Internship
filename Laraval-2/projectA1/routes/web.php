<?php

use App\Http\Controllers\products;
use Illuminate\Support\Facades\Route;

//main page
Route::get("/", [products::class, 'index']);
//items entery page
Route::get("templates/inputpage", [products::class, 'input']);


Route::post("templates/store", [products::class, 'store']);
