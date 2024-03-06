<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;
use App\Models\User;




class UserController extends Controller
{
    public function index (){
        $user 	= DB::table('users')->orderBy('id','DESC')->get();

		$data = array(  'title'     => 'Logbook',
                        'user'      => $user,
                        'content'   => 'admin/user/index'
                    );
        return view('layout/wrapper',$data);
    }

    public function import(Request $request){
  
        request()->validate([
            'file'        => 'required|mimes:csv,xls,xlsx',
            ]);
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Datausers', $namaFile);
        
        Excel::import(new User, \public_path ('/Datausers/'.$namaFile));  
       
         return redirect('admin/user')->with(['succses' => 'Data telah ditambah']);
  
    }

    public function detail($id)
    {
        $user   = DB::table('users')->where('id',$id)->orderBy('id','DESC')->first();
        $data = array(
            'title'       => 'Profil User',
            'user'      => $user,
            'content'   => 'admin/user/detail'

        );
        return view('layout/wrapper',$data);
    }

    public function add()
    {
        $data = array(
            'title'       => 'Tambah Data',
            'content'   => 'admin/user/tambah'

        );
        return view('layout/wrapper',$data);
    }
    
    public function edit($id)
    {
        $user   = DB::table('users')->where('id',$id)->orderBy('id','DESC')->first();

        $data = array(  'title'     => 'Edit User',
                        'user'      => $user,
                        'content'   => 'admin/user/edit'
                    );
        return view('layout/wrapper',$data);
    }

    public function edit_password()
    {

        $data = array(  'title'     => 'Ubah Password',
                        'content'   => 'admin/user/edit-password'
                    );
        return view('layout/wrapper',$data);
    }

    // Proses
    public function proses(Request $request)
    {
        
        if(isset($_POST['hapus'])) {
            $id_usernya       = $request->id;
            for($i=0; $i < sizeof($id_usernya);$i++) {
                DB::table('users')->where('id',$id_usernya[$i])->delete();
            }

            return redirect('admin/user')->with(['succses' => 'Data telah dihapus']);
      
        }
    }

    // tambah
    public function tambah(Request $request)
    {
    	request()->validate([
                            'name'     => 'required',
					        'username' => 'required|unique:users',
					        'password' => 'required',
					        'level' => 'required',
					        ]);
      
           
            DB::table('users')->insert([
                'name'          => $request->name,
                'username'   	=> $request->username,
                'password'      => bcrypt($request->password),
                'level'         => $request->level
            ]);
        
        return redirect('admin/user')->with(['succses' => 'Data telah ditambah']);
    }

    // edit
    public function proses_edit(Request $request)
    {
    	request()->validate([
					        'name'     => 'required',
                            'username' => 'required',
                            'password' => 'required',
                            'level' => 'required',
					        ]);
       
            DB::table('users')->where('id',$request->id)->update([
                'name'          => $request->name,
                'username'      => $request->username,
                'password'      => bcrypt($request->password),
                'level'   => $request->level
            ]);
        
        return redirect('admin/user')->with(['succses' => 'Data telah diupdate']);
    }

    public function proses_edit_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:4|different:old_password',
            'confirm_password' => 'required|min:4|same:new_password',
        ]);
        
      
        // Memeriksa apakah password saat ini cocok
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The current password is incorrect.'])->withInput();      
          }
        if ($request->new_password != $request->confirm_password) {
            return redirect()->back()->with('error', 'Password baru harus sesuai.');
        }
        
        DB::table('users')
            ->where('id',auth()->user()->id)
            ->update(['password' => Hash::make($request->new_password)
        ]);
       
            return redirect()->back()->with(['succses' => 'Password Berhasil diubah, Silahkan Login Ulang']);   

        
        }

    // Delete
    public function delete($id)
    {
    	DB::table('users')->where('id',$id)->delete();
    	return redirect('admin/user')->with(['succses' => 'Data telah dihapus']);
    }
}
