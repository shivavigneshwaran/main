<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use DB;

use App\Models\Categorye;

use App\Models\demo;
class UserController extends Controller
{

public function test(Request $request){




    $table = new Categorye;
    $table->name = $request->name;

    $table->remarks = $request->category;
    $save = $table->save();
    $id = $table->id;

    //$id = $table->id;
   // $data = Categorye::where('id',$id)->get();

   $data = DB::select('select * from  categoryes where id = ?',[$id]);

    return view('test',compact('data'));

}

public function update(Request $request){
    $ids = $request->id;
    $datas = DB::select('select * from subcats where cust_id = ?',[$ids]);

    return ['data'=>$datas];
}

public function example(){




    $d = DB::select('select * from  categoryes');







    $name= '';

    $remarks = '';

    foreach($d as $data=>$val ){


            foreach($val as $da => $v){

                if($da == "name"){

                    $name = $v;


                }
                else if($da == "remarks"){
                    $remarks = $v;



                }








            }

            $table = new demo ;
            $table->name = $name;
            $table->remarks = $remarks;
            $table->save();





    }



}
}
