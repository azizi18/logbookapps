<?php

namespace App\Http\Controllers\Users;

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

        $total_logbook = DB::table('logbook')->where('user_id', auth()->id())->count();
        $total_logbook_persen = 100;

        $persentase_logbook = ($total_logbook / $total_logbook_persen) * 100;
        
		$data = array(  'title'     => 'welcome users',
                        'total_users'     => $total_users,
                        'persentase_users'     => $persentase_users,
                        'total_logbook'     => $total_logbook,
                        'persentase_logbook'     => $persentase_logbook,
                        'content'   => 'user/dashboard/index'
                    );
        return view('layout/wrapper',$data);
    
    }
}
