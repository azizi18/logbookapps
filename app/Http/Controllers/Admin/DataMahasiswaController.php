<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\DosenMahasiswaAssignment;

class DataMahasiswaController extends Controller
{
    public function index (){

        // $dataMahasiswa = User::select('users.id', 'users.nama', DB::raw('COUNT(logbook.id) as logbook_count'))
        //     ->leftJoin('logbook', 'users.id', '=', 'logbook.user_id')
        //     ->where('users.level', 'users')
        //     ->groupBy('users.id', 'users.nama')
        //     ->get();

       
        // $dataassigmentMahasiswa = DB::table('dosen_mahasiswa_assignment')->where('id')->get();
        // $dataassigmentMahasiswa = DosenMahasiswaAssignment::with(['dosen', 'mahasiswa'])->get();
        $dataassigmentMahasiswa = DosenMahasiswaAssignment::latest()->get();
       

		$data = array(  'title'     => 'Data Mahasiswa',
                        'dataassigmentMahasiswa'      => $dataassigmentMahasiswa,
                        'content'   => 'admin/data-mahasiswa/index'
                    );
        return view('layout/wrapper',$data);
    }
   
    public function add()
    {
        $dosen = DB::table('users')
            ->where('level', 'dosen') 
            ->get();

        $mahasiswa = DB::table('users')
            ->where('level', 'users') 
            ->get();
        $data = array(
            'title'       => 'Tambah Data',
            'dosen'   => $dosen,
            'mahasiswa'   => $mahasiswa,
            'content'   => 'admin/data-mahasiswa/tambah'

        );
        return view('layout/wrapper',$data);
    }

    public function assignMahasiswaToDosen(Request $request)
    {
        request()->validate([
                'dosen_id'  => 'required', 
                'selected_mahasiswas' =>'required'
        ]);

        $selectedMahasiswas = $request->input('selected_mahasiswas');
    $dosenId = $request->input('dosen_id');

    foreach ($selectedMahasiswas as $mahasiswaId) {
        DB::table('dosen_mahasiswa_assignment')->insert([
            'dosen_id' => $dosenId,
            'mahasiswa_id' => $mahasiswaId,
        ]);
    }
        
        return redirect('admin/assign-mahasiswa-dosen')->with(['succses' => 'Data telah ditambah']);

    }

    public function edit($id)
    {
        $mahasiswa = DosenMahasiswaAssignment::where('id',$id)->first();
        $dosennama = DosenMahasiswaAssignment::where('id',$id)->first();
       
        $dosen  = DB::table('users')->where('level','dosen', $id)->get();
        $assignedDosenId = DB::table('dosen_mahasiswa_assignment')
        ->where('mahasiswa_id', $id)
        ->value('dosen_id');
        
        // $dosen = DB::table('dosen_mahasiswa_assignment')
        //             ->where('mahasiswa_id', $id)
        //             ->pluck('dosen_id')
        //             ->toArray();
        // $assignDosenMahasiswa   = DB::table('dosen_mahasiswa_assignment')->where('id',$id)->first();

   
        $data = array(  'title'     => 'Edit Logbook',
                        'dosen'      => $dosen,
                        'dosennama'      => $dosennama,
                        'mahasiswa'      => $mahasiswa,
                        'assignedDosenId'      => $assignedDosenId,
                        'content'   => 'admin/data-mahasiswa/edit'
                    );
        return view('layout/wrapper',$data);
    }


    public function proses_edit(Request $request)
    {

        
        // DB::table('dosen_mahasiswa_assignment')->where('mahasiswa_id', $mahasiswaId)->delete();

        // // Simpan data baru berdasarkan pilihan dosen yang dipilih
        // DB::table('dosen_mahasiswa_assignment')->insert([
        //     'dosen_id' => $request->input('dosen_id'),
        //     'mahasiswa_id' => $mahasiswaId
        // ]);
        // Validasi form
        // DB::table('dosen_mahasiswa_assignment')->update([
        //     'dosen_id' => $request->dosen_id,
        //     'mahasiswa_id' => $request->mahasiswa_id,
        // ]);
        // $dosenId = $request->input('dosen_id');
        // $selectedMahasiswas = $request->input('selected_mahasiswas');
    
        // // Hapus semua asosiasi yang ada untuk dosen ini
        // DosenMahasiswaAssignment::where('dosen_id', $dosenId)->delete();
    
        // // Tambahkan kembali asosiasi yang baru dipilih
        // foreach ($selectedMahasiswas as $mahasiswaId) {
        //     DosenMahasiswaAssignment::create([
        //         'dosen_id' => $dosenId,
        //         'mahasiswa_id' => $mahasiswaId,
        //     ]);
        // }
             $dosenId = $request->input('dosen_id');

            DosenMahasiswaAssignment::where('dosen_id', $dosenId)->delete();

            DB::table('dosen_mahasiswa_assignment')->update([
                    'dosen_id' => $request->input('dosen_id'),
                ]);

            
        
        return redirect('admin/assign-mahasiswa-dosen')->with(['succses' => 'Data telah diupdate']);

    }

    public function delete($id)
    {
    	DB::table('dosen_mahasiswa_assignment')->where('id',$id)->delete();
    	return redirect('admin/assign-mahasiswa-dosen')->with(['succses' => 'Data telah dihapus']);
    }


}
