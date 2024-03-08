<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index (){
      
        
		// jumlah user
        $total_users = DB::table('users')->count();

        $total_users_persen = 100;

        $persentase_users = ($total_users / $total_users_persen) * 100;

        // Jumlah logbook

        $total_logbook = DB::table('logbook')->count();
        $total_logbook_persen = 100;

        $persentase_logbook = ($total_logbook / $total_logbook_persen) * 100;
        
		$data = array(  'title'     => 'welcome dosen',
                        'total_users'     => $total_users,
                        'persentase_users'     => $persentase_users,
                        'total_logbook'     => $total_logbook,
                        'persentase_logbook'     => $persentase_logbook,
                        'content'   => 'dosen/dashboard/index'
                    );
        return view('layout/wrapper',$data);
    
    }
}
