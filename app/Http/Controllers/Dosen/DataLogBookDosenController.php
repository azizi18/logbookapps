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

class DataLogBookDosenController extends Controller
{
   
    public function index (){

        Paginator::useBootstrap();
        $users 	= DB::table('users')->where('level', 'users')->orderBy('id','DESC')->get();
		$data = array(  'title'     => 'Data Logbook',
                        'users'      => $users,
                        'content'   => 'dosen/logbook/index'
                    );
        return view('layout/wrapper',$data);
    }
    public function getLogbookByUser(Request $request)
    {
        $userId = $request->user()->id;
        $logbookData = Logbook::where('user_id', $userId)->get();
        return response()->json($logbookData);
    }

}
