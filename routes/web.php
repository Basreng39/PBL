<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/",[AdminController::class,"login"])->middleware("guest")->name("login");
Route::post("/login",[AdminController::class,"auth"]);

Route::get("/admin",[AdminController::class,"index"])->middleware("auth");
Route::get("/admin/kamar",[AdminController::class,"kamar"]);

Route::post("/logout",[AdminController::class,"logout"]);

