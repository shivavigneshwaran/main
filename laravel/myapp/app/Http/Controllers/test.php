<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function ajax(Request $request){

        $n = $request->name;
        $r = $request->remarks;

        return response()->json(['name' => $n, 'remarks' => $r]);
    }
}
