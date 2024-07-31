<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RantingController;

// Route::get('/ranting', function () {
//     return view('welcome');
// });

Route::get("/ranting", [RantingController::class, "index"]);
Route::delete("/ranting/{id}", [RantingController::class, "destroy"]);
Route::get("/ranting/create", [RantingController::class, "create"])->name("ranting.create");
Route::post("/ranting", [RantingController::class, "store"])->name("ranting.store");
Route::get("/ranting/{id}", [RantingController::class, "edit"]);
Route::put("/ranting/{id}", [RantingController::class, "update"])->name("ranting.update");