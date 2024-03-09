<?php

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;




class UserController extends Controller
{
 

    public function edit_password()
    {

        $data = array(  'title'     => 'Ubah Password',
                        'content'   => 'dosen/ubah-password/edit-password'
                    );
        return view('layout/wrapper',$data);
    }

  
    public function proses_edit_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:4|different:old_password',
            'confirm_password' => 'required|min:4|same:new_password',
        ]);
        $user = Auth::user();
      
        // Memeriksa apakah password saat ini cocok
        if (!Hash::check($request->old_password,  $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The current password is incorrect.'])->withInput();      
          }
        if ($request->new_password != $request->confirm_password) {
            return redirect()->back()->with('error', 'Password baru harus sesuai.');
        }
        
        DB::table('users')
            ->where('id', $user->id)
            ->update(['password' => Hash::make($request->new_password)
        ]);

        Auth::guard()->login($user);
       
            return redirect()->back()->with(['succses' => 'Password Berhasil diubah, Silahkan Login Ulang']);   

        
        }

   
}
