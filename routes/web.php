<?php

use App\Http\Controllers\HabitantController;
use App\Http\Controllers\UserController;
use App\Models\Ville;
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

Route::get('/habitants', [HabitantController::class, "index"]);
Route::get('/habitants/create', [HabitantController::class, "create"])->middleware("check-admin");
Route::post('/habitants', [HabitantController::class, "store"]);
Route::get('/habitants/edit/{habitant}', [HabitantController::class, "edit"]);
Route::put('/habitants', [HabitantController::class, "update"]);
Route::delete('/habitants/{id}', [HabitantController::class, "destroy"]);


//Route::model('vil', Ville::class);
Route::get("/villes/{ville}", [HabitantController::class, "ville"]);

Route::get("/register", function() {
    return view("register");
});
Route::view("/register", "register");
Route::post("/register", [UserController::class, "register"]);

Route::view("/login", "login");
Route::post("/login", [UserController::class, "login"]);
