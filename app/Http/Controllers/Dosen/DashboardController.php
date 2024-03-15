<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\DosenMahasiswaAssignment;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index (){
      
        
		// jumlah user
        $total_users = DB::table('users')->where('level','users')->count();

        $total_users_persen = 100;

        $persentase_users = ($total_users / $total_users_persen) * 100;

        // Jumlah logbook

        $total_logbook = DB::table('logbook')->count();
        $total_logbook_persen = 100;

        $persentase_logbook = ($total_logbook / $total_logbook_persen) * 100;

        $tahun = date('Y');
        $bulan = date('m');
        for ($i=1; $i <= $bulan ; $i++){
            $totalLogbook = DB::table('logbook')->whereYear('created_at', $tahun)->whereMonth('created_at', $i)->count();
           
            $totalusers = DB::table('users')->whereYear('created_at', $tahun)->whereMonth('created_at', $i)->where('level','users')->count();
            $databulan[] = Carbon::create()->month($i)->format('F');
            $dataTotalLogbook[] = $totalLogbook;
            $dataTotalusers[] =  $totalusers;



        }


        $chart = (new LarapexChart)->lineChart()
        ->setTitle('Dosen Grafik')
        ->setSubtitle('Total LogBook Setiap Bulan')
        ->setXAxis($databulan)
        ->setHeight(300)
        ->setDataset([
            [
                'name'  => 'Total Logbook',
                'data'  => $dataTotalLogbook,
            ],
            [
                'name'  => 'Total Mahasiswa',
                'data'  => $dataTotalusers,
            ]
           
        ]);   
        
		$data = array(  'title'     => 'welcome dosen',
                        'total_users'     => $total_users,
                        'persentase_users'     => $persentase_users,
                        'total_logbook'     => $total_logbook,
                        'persentase_logbook'     => $persentase_logbook,
                        'chart'     => $chart,
                        'content'   => 'dosen/dashboard/index'
                    );
        return view('layout/wrapper',$data);
    
    }
}
