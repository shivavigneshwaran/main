<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthContoller;

use App\Http\Controllers\test;

use Illuminate\Http\Request;

use App\Models\Subcat;

use App\Models\categorye;

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


// route::get('month/{num}',function($num){

    //    if($num == 1){

    //     echo "january";
    //    }
    //    else if($num == 2){

    //     echo "feb";

    //    }

    //    else if($num == 3){

    //     echo "mar";
    //    }

    // })->middleware(['monthzero','month']);


    // rout::get('/',function(){

    //     return view("welcome");
    // });

    // route::get('/',[CustomAuthContoller::class,'index']);

    // route::post('/check',[CustomAuthContoller::class,'check']);

    // route::get('login',[CustomAuthContoller::class,'index'])->name('login');

    // route::post('postlogin',[CustomAuthContoller::class,'login'])->name('postlogin');

    route::get('ajax',[CustomAuthContoller::class,'login']);

    route::get('test',[CustomAuthContoller::class,'insert']);


    route::get('cat',[CustomAuthContoller::class,'cateinsert'])->name('cat');


    route::post('cate',[CustomAuthContoller::class,'category']);

    route::post('dele',[CustomAuthContoller::class,'delete']);

    route::view('home','home');

    route::view('test2','test1');

    route::post('test3',[test::class,'ajax']);

    route::view('blade','layout/default');
    // route::view('home2','home2');
    route::get('/',function(){
    $heading = "<h1>This is home page</h1>";

    $no_users = 1;

    $unless = 1;

    return view('home2',compact('heading','no_users','unless'));
    });
    route::view('contact','contact');


    route::get('show-users',[CustomAuthContoller::class,'showUsers']);

    route::post('vig',[CustomAuthContoller::class,'test2']);
    // route::post('cate',function(Request $request){


    //     $cate = $request->input('cat');
    //    $name = $request->input('name');
    //    $remarks = $request->input('remarks');

    // $category = new Subcat;

    // $category->subcat = $cate;

    // $category->remarks = $remarks ;

    //  $save = $category->save();

    // // $category->name = $cate;

    // if($save)
    // {
    //     return view('test')->with('message','data inserted sucessfully');
    // }











    // });


    // route::view('page');

    route::post('test2',[CustomAuthContoller::class,'test2'])->name('test2');

    route::get('page',function(){

        $data =  DB::select('select * from categoryes ');

        return view('page',compact('data'));

    });

    // route::post(' ',[CustomAuthContoller::class,'validate']);









