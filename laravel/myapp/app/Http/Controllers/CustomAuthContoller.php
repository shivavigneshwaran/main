<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Models\Todo;

 use App\Models\categorye;

 use Response;



use DB;

class CustomAuthContoller extends Controller
{
    public function login(){
        return view('ajax');
    }

    public function insert(Request $request)
    {
        $name = $request->name;

        $to_do = new Todo;

        $to_do->name = $name ;

        if( $to_do->save())
        {
        return "inserted sucessfully";
        }
        else{
            return "data not inserted ";
        }


    }

    public function cateinsert(Request $request)
    {




        return view('home');


    }
    public function category(Request $request)
    {

        $data = $request->all();

        return $data;



        //  $n = $request->name;

        //  $table = new category;

        //  $table->category = $n ;
        //  $table->save();
        // $name = $request->name;
        // $remarks = $request->remarks;


        // $to_do = new Todo;

        // $to_do->name = $name ;

        // $to_do->remarks = $remarks;

        // $to_do->save();



        //  if($to_do->save())
        //  {
        //     // $data =  Todo::all();
        //     // return response()->json(['data'=>'sucess']);
        //     $id = $to_do->id;
        //     $data = Todo::where('id',$id)->get();
        //     return response()->json(['data'=>$data]);

        //  }
        //  else{
        //     return 'not insurted';
        //  }


        // $r = $request->remarks;

        //   DB::insert('insert into  categoryes (category) values (?)', [$n]);

        // $data =  Todo::all();
        // return view('table',['user'=>$data]);









        // return response()->json(['name' => $n, 'remarks' => $r]);








    }
    // public function showUsers(){
    //     $data =  Todo::all();
    //     return response()->json(['data'=>$data]);
    //  }

    public function delete(Request $request){



        $datar = $request->data;
        // $data = Todo::where('id',$id)->delete();

        return $datar;

    }
    public function test(Request $request){

        // $id = 1;

    //  $data = Todo::where('id',$id)->get();
    $data = DB::select('select * from todos');


     return view('test', ['data' =>$data]);


    }

    // public function cate(Request $request){



    //     // ,









    // }

    public function test2(Request $request){

       $name =  $request->name;

       $category =  $request->category;


       $table = new categorye;

       $table->category = $name;

       $table->remarks = $category;

       $table->save();

      $id =  $table->id;

      $data =  DB::select('select * from categoryes ');


      $text = 'hellow';


     return view('page',compact('data'));



    }


    public function rdt(Request $request){


        $name =  $request->name;

        $category =  $request->category;


        $table = new categorye;

        $table->category = $name;

        $table->remarks = $category;

        $table->save();

       $id =  $table->id;

       $data =  categorye::where('id',$id)->get();


       $text = 'hellow';




        return view('page',compact('data'));


    }


}
