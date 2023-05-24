<?php

use App\Http\Controllers\HabitantController;
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
Route::get('/habitants/create', [HabitantController::class, "create"]);
Route::post('/habitants', [HabitantController::class, "store"]);
Route::get('/habitants/edit/{id}', [HabitantController::class, "edit"]);
Route::put('/habitants', [HabitantController::class, "update"]);
Route::delete('/habitants/{id}', [HabitantController::class, "destroy"]);
