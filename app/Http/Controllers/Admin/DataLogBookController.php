<?php

namespace App\Http\Controllers\Admin;

use App\Exports\logBookExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\LogBookImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;




class DataLogBookController extends Controller
{
    public function index (){
        Paginator::useBootstrap();
        $logbook 	= DB::table('logbook')->orderBy('id','DESC')->get();
        
		$data = array(  'title'     => 'Data Logbook',
                        'logbook'      => $logbook,
                        'content'   => 'admin/data-logbook/index'
                    );
        return view('layout/wrapper',$data);
    }

    public function import(Request $request){
  
        request()->validate([
            'file'        => 'required|mimes:csv,xls,xlsx',
            ]);
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataLogbook', $namaFile);
        
        Excel::import(new LogBookImport, \public_path ('/DataLogbook/'.$namaFile));  
       
         return redirect('admin/data-logbook')->with(['succses' => 'Data telah ditambah']);
  
    }

    public function export() 
    {
        return Excel::download(new logBookExport, 'data-logbook.xlsx');
    }


    public function add()
    {
        $data = array(
            'title'       => 'Tambah Data',
            'content'   => 'admin/data-logbook/tambah'

        );
        return view('layout/wrapper',$data);
    }
    
    public function edit($id)
    {
        $logbook   = DB::table('logbook')->where('id',$id)->orderBy('id','DESC')->first();

        $data = array(  'title'     => 'Edit Logbook',
                        'logbook'      => $logbook,
                        'content'   => 'admin/data-logbook/edit'
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

            return redirect('admin/data-logbook')->with(['succses' => 'Data telah dihapus']);
      
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
					        'level_kompetensi'  => 'required',
					        'asal_rujukan'      => 'required',
					        'keterangan'        => 'required',
					        'tanggal_masuk'     => 'required',
					        'tanggal_tindakan'  => 'required',
					        ]);             
               $status = $request->input('status', 'tertunda');
               $uuid = Str::uuid();

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
                'tanggal_masuk'   	   => date('Y-m-d', strtotime($request->tanggal_masuk)),
                'tanggal_tindakan'     => date('Y-m-d', strtotime($request->tanggal_tindakan))
                
            ]);
        
        return redirect('admin/data-logbook')->with(['succses' => 'Data telah ditambah']);
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
                        'level_kompetensi'      => 'required',
                        'asal_rujukan'      => 'required',
                        'keterangan'        => 'required',
                        'tanggal_masuk'     => 'required',
                        'tanggal_tindakan'  => 'required',
					        ]);
                            
            $status = $request->input('status', 'tertunda');
            $uuid = Str::uuid();
       
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
                 'tanggal_masuk'   	   => date('Y-m-d', strtotime($request->tanggal_masuk)),
                'tanggal_tindakan'     => date('Y-m-d', strtotime($request->tanggal_tindakan))
            ]);
        
        return redirect('admin/data-logbook')->with(['succses' => 'Data telah diupdate']);
    }


    // Delete
    public function delete($id)
    {
    	DB::table('logbook')->where('id',$id)->delete();
    	return redirect('admin/data-logbook')->with(['succses' => 'Data telah dihapus']);
    }


}
