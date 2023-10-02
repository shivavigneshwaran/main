<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $email = $request->email;
        $password  = $request->password;


        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = user::where('email',$email)->first();
            Auth::login($user);
            $user = Auth::user();
            return redirect('/home')->with(['user'=>$user->name,'email'=>$user->email]);
        }
        else{
            return back()->withErrors('Invalid Credintials!');
        }


    }

    public function logout(Request $request){

        Auth::logout();
        return redirect('login');

    }
}
