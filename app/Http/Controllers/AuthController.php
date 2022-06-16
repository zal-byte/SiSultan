<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    //



    public function login(  )
    {
        if(\Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('auth.log_in');
    }
    public function login_post( Request $data )
    {
        $validate = Validator::make($data->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        if($validate->fails()){
            return redirect()->route('login')->withErrors($validate)->withInput();
        }
        
        $cridential = [
            'email' => $data->email,
            'password'=> $data->password
        ];

        $user = User::where('email','=', $data->email)->first();
        Auth::attempt( $cridential);

        if(Auth::check()){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->withErrors(array('log_err'=>'email atau password salah'))->withInput();
        }

    }
}
