<?php

namespace App\Http\Controllers\Dosen;

use App\Exports\logBookExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Logbook;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\DosenMahasiswaAssignment;


class DataLogBookDosenController extends Controller
{
   
    public function index (Request $request ){
        
        $dosenId = $request->user()->id;

        // Ambil daftar mahasiswa yang diassign ke dosen tersebut
      
        $mahasiswas = DosenMahasiswaAssignment::where('dosen_id', $dosenId)
                        ->with('mahasiswa')
                        ->get();
                   
		$data = array(  'title'     => 'Data Logbook',
                        'mahasiswas'    => $mahasiswas,
                        'dosenId'    => $dosenId,
                        'content'   => 'dosen/logbook/index'
                    );
        return view('layout/wrapper',$data);
    }


    // public function detailLogbook($id)
    // {
    //     // Ambil data logbook berdasarkan user_id mahasiswa dan dosen_id
    //     $dosenId = auth()->user()->id;
    //     $logbooks = Logbook::where('user_id', $id, $dosenId)
    //                         ->get();
       


    //      $data = array(  'title'     => 'Data Logbook',
    //                     'logbooks'    => $logbooks,
    //                     'content'   => 'dosen/logbook/detail-data-logbook'
    //                 );
    //     return view('layout/wrapper',$data);
    
    // }

    public function getLogbookByUser(Request $request)
    {
        $mahasiswaId = $request->input('mahasiswa_id');

        $logbooks = Logbook::where('user_id', $mahasiswaId)->get();


            // Kemudian, Anda dapat mengembalikan atau menampilkan data logbook sesuai kebutuhan
         $data = array(  'title'     => 'Data Logbook',
                        'logbooks'    =>  $logbooks,
                        'content'   => 'dosen/logbook/detail-data-logbook'
                    );
        return view('layout/wrapper',$data);
      
        
    }

    public function updateStatus(Request $request, $logbookId)
    {
    
    // Mengubah status logbook dari "tertunda" menjadi "diterima" atau sebaliknya
    $logbook = DB::table('logbook')->find($logbookId);
    
    // Mengubah status logbook dari "tertunda" menjadi "diterima" atau sebaliknya
    $newStatus = $logbook->status === 'tertunda' ? 'diterima' : 'tertunda';
    
    // Update status logbook di dalam database
    DB::table('logbook')
        ->where('id', $logbookId)
        ->update(['status' => $newStatus]);
    
    
    // Update status logbook di dalam database
   
    
    return redirect()->back()->with(['succses' => 'Validasi Data berhasil']);
    }
  

}
