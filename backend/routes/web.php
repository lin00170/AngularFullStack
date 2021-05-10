<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\MushroomController;
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

Route::get('/', function () {
    return view('welcome');
});

//mushroom

Route::get('/mushroom/show',[MushroomController::class,'show']);
Route::get('/mushroom',[MushroomController::class,'index'])->name('mushroom');
Route::get('/mushroom/create',[MushroomController::class,'create'])->name('mushroom.create');
Route::post('/mushroom/create',[MushroomController::class,'store'])->name('mushroom.store');

