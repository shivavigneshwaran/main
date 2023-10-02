<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController; //add UserController
use Illuminate\Support\Facades\Auth;
use App\Models\user;

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

route::view('login','auth/login')->name('login')->middleware("guest");

route::view('register','auth/register')->middleware("guest");

route::get('home',function(){

  $id = Auth::id();
  $data = user::find($id);
  return view('pages.home',compact('id','data'));
});

route::view('about','pages.about');

route::post('store',[RegisterController::class,'store']);
route::post('authenticate',[LoginController::class,'authenticate']);

route::get('logout',[LoginController::class,'logout']);

// route::get('testshow',function(){
// if(Auth::check()){
// return view('testshow');
// }else{
//     return redirect('login')->with(['mes' => 'please login to access page']);
// }
// });

route::get('testshow',function(){

return view('testshow');

})->middleware('auth');

