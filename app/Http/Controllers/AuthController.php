<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
      return view('admin.login');
    }

    public function handleLogin(Request $request){
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
          return redirect()->intended('/');
      }else{
        return back()->with('error', 'Login Credentials not correct. Try again!!!');
      }
    }

    public function logout(){
      Auth::logout();
      session()->flush();
      return redirect()->route('index_page');
    }
}
