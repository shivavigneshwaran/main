<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; //add UserController

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



Route::view('test','test');

Route::post('test2', [UserController::class, 'test'])->name('test2');

//Route::post('update', [UserController::class, 'update']);

//route::get('test',[UserController::class, 'test']);
