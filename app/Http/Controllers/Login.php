<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
  public function index()
  {
      $data = array(
          'title'     => 'Login',
      );
      return view('login/index', $data);
  }
    public function login (request $request){
      
      $request->validate([
         'username' => 'required',
         'password' => 'required|min:4',
      ]);
 
       if (Auth::attempt($request->only('username','password','level'))){        
        return redirect('admin/dashboard')->with(['succses' => 'Anda berhasil login']);

       }
       else{

         return redirect('/')->with(['error' => 'Mohon maaf, Username atau password salah']);

       }
      
    }

    public function logout (){
      
       Session()->forget('id');
       Session()->forget('name');
       Session()->forget('username');
       Session()->forget('level');
       return redirect('/')->with(['succses' => 'Anda berhasil logout']);

     }
}
