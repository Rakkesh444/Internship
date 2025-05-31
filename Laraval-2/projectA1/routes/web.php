<?php

use App\Http\Controllers\products;
use Illuminate\Support\Facades\Route;

//main page
Route::get("/", [products::class, 'index']);
//items entery page
Route::get("templates/inputpage", [products::class, 'input']);
<<<<<<< HEAD


Route::post("templates/store", [products::class, 'store']);
=======
Route::post("templates/store", [products::class, 'store']);

//product details card page
Route::get("templates/{id}/show", [products::class, 'show']);
//Edite Page
Route::get("templates/{id}/edit", [products::class, "edit"]);
//update
Route::put("templates/{id}/update", [products::class, "update"]);
//delete
Route::get("templates/{id}/delete", [products::class, "destroy"]);
>>>>>>> d4bd095f43536d152b8a185015db733a0f8db7b2
