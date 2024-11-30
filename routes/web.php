<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaraboxController;

Route::view('/','welcome');
Route::view('/AddAnimal','AddAnimal');
Route::post('/AddAnimal',[LaraboxController::class,'AddAnimal']);
Route::get('/',[LaraboxController::class,'GetAnimal']);
