<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
