<?php

namespace App\Http\Controllers\Users;

use App\Exports\logBookExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;


class DataLogBookUserController extends Controller
{
    public function index (){
        Paginator::useBootstrap();

        $user = auth()->id();

        $logbook 	= DB::table('logbook')->where('user_id', $user)->get();
        
		$data = array(  'title'     => 'Data Logbook',
                        'logbook'      => $logbook,
                        'content'   => 'user/data-logbook/index'
                    );
        return view('layout/wrapper',$data);
    }

 

    public function export() 
    {
        return Excel::download(new logBookExport, 'data-logbook.xlsx');
    }


    public function add()
    {
        $data = array(
            'title'       => 'Tambah Data',
            'content'   => 'user/data-logbook/tambah'

        );
        return view('layout/wrapper',$data);
    }
    
    public function edit($id)
    {
        $logbook   = DB::table('logbook')->where('id',$id)->orderBy('id','DESC')->first();

        $data = array(  'title'     => 'Edit Logbook',
                        'logbook'      => $logbook,
                        'content'   => 'user/data-logbook/edit'
                    );
        return view('layout/wrapper',$data);
    }


    // Proses
    public function proses(Request $request)
    {
        
        if(isset($_POST['hapus'])) {
            $id_logbooknya       = $request->id;
            for($i=0; $i < sizeof($id_logbooknya );$i++) {
                DB::table('logbook')->where('id',$id_logbooknya[$i])->delete();
            }

            return redirect('users/data-logbook')->with(['succses' => 'Data telah dihapus']);
      
        }
    }

    // tambah
    public function tambah(Request $request)
    {
    	request()->validate([
                            'nama_pasien'       => 'required',
					        'umur'              => 'required',
					        'mr'                => 'required',
					        'diagnosis_masuk'   => 'required',
					        'diagnosis_keluar'  => 'required',
					        'tindakan'          => 'required',
					        'dpjp'              => 'required',
					        'klasifikasi_kasus' => 'required',
					        'kasus_obstetri'    => 'required',
					        'kasus_ginekologi'  => 'required',
					        'level_kompetensi'   => 'required',
					        'asal_rujukan'      => 'required',
					        'keterangan'        => 'required',
					        'tanggal_masuk'     => 'required',
					        'tanggal_tindakan'  => 'required',
					        ]);             
               $status = $request->input('status', 'tertunda');
               $uuid = Str::uuid();
               $tanggal_masuk = Carbon::parse($request->tanggal_masuk)->format('Y-m-d');
               $tanggal_tindakan = Carbon::parse($request->tanggal_tindakan)->format('Y-m-d');
              
            DB::table('logbook')->insert([
                'user_id'               => auth()->id(),
                'id'                    => $uuid,
                'nama_pasien'          => $request->nama_pasien,
                'umur'   	           => $request->umur,
                'mr'        	       => $request->mr,
                'diagnosis_masuk'      => $request->diagnosis_masuk,
                'diagnosis_keluar'     => $request->diagnosis_keluar,
                'tindakan'   	       => $request->tindakan,
                'dpjp'   	           => $request->dpjp,
                'klasifikasi_kasus'    => $request->klasifikasi_kasus,
                'kasus_obstetri'   	   => $request->kasus_obstetri,
                'kasus_ginekologi'     => $request->kasus_ginekologi,
                'level_kompetensi'     => $request->level_kompetensi,
                'asal_rujukan'   	   => $request->asal_rujukan,
                'keterangan'   	       => $request->keterangan,
                'status'   	           => $status,
                'tanggal_masuk'   	   => $tanggal_masuk,
                'tanggal_tindakan'     => $tanggal_tindakan
                
            ]);
        
        return redirect('users/data-logbook')->with(['succses' => 'Data telah ditambah']);
    }

    // edit
    public function proses_edit(Request $request)
    {
    	request()->validate([
                        'nama_pasien'       => 'required',
                        'umur'              => 'required',
                        'mr'                => 'required',
                        'diagnosis_masuk'   => 'required',
                        'diagnosis_keluar'  => 'required',
                        'tindakan'          => 'required',
                        'dpjp'              => 'required',
                        'klasifikasi_kasus' => 'required',
                        'kasus_obstetri'    => 'required',
                        'kasus_ginekologi'  => 'required',
                        'level_kompetensi'  => 'required',
                        'asal_rujukan'      => 'required',
                        'keterangan'        => 'required',
                        'tanggal_masuk'     => 'required',
                        'tanggal_tindakan'  => 'required',
					        ]);
                            
            $status = $request->input('status', 'tertunda');
            $uuid = Str::uuid();
            $tanggal_masuk = Carbon::parse($request->tanggal_masuk)->format('Y-m-d');
            $tanggal_tindakan = Carbon::parse($request->tanggal_tindakan)->format('Y-m-d');
            DB::table('logbook')->where('id',$request->id)->update([
                'user_id'               => auth()->id(),
                'id'                    => $uuid,
                'nama_pasien'          => $request->nama_pasien,
                'umur'   	           => $request->umur,
                'mr'        	       => $request->mr,
                'diagnosis_masuk'      => $request->diagnosis_masuk,
                'diagnosis_keluar'     => $request->diagnosis_keluar,
                'tindakan'   	       => $request->tindakan,
                'dpjp'   	           => $request->dpjp,
                'klasifikasi_kasus'    => $request->klasifikasi_kasus,
                'kasus_obstetri'   	   => $request->kasus_obstetri,
                'kasus_ginekologi'     => $request->kasus_ginekologi,
                'level_kompetensi'     => $request->level_kompetensi,
                'asal_rujukan'   	   => $request->asal_rujukan,
                'keterangan'   	       => $request->keterangan,
                'status'   	           => $status,               
                 'tanggal_masuk'   	   => $tanggal_masuk,
                'tanggal_tindakan'     => $tanggal_tindakan
            ]);
        
        return redirect('users/data-logbook')->with(['succses' => 'Data telah diupdate']);
    }

 // Delete
 public function delete($id)
 {
    // $user = auth()->id();
     DB::table('logbook')->where('id', $id)->delete();
     return redirect('users/data-logbook')->with(['succses' => 'Data telah dihapus']);
 }
   

}
