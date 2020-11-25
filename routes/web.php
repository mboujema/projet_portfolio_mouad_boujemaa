<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkilsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// index
Route::get("/", [HomeController::class, "index"])->name("welcome");

//admin
Route::get('/admin', [AdminController::class, "index"])->name("admin");


//ressource
Route::resource("/facts", FactsController::class);

Route::resource("/skils", SkilsController::class);

Route::resource("/users", UserController::class);


//create
// Route::get("/user/create", [UserController::class, "create"]);

//delete
Route::get("/usersup/{id}/delete", [UserController::class, "destroy"]);
