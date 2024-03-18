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

      $credentials = $request->only('username', 'password','level');
    
    if (Auth::attempt($credentials)) {
        // Login berhasil
        if (Auth::user()->level === 'admin') {
            return redirect('admin/dashboard');
        } elseif (Auth::user()->level === 'dosen') {
            return redirect()->intended('dosen/dashboard');
        }
        elseif (Auth::user()->level === 'mahasiswa') {
          return redirect()->intended('users/dashboard');
      }
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
       return redirect('/');

     }
}
