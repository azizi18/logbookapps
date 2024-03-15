<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use ArielMejiaDev\LarapexCharts\LarapexChart;


class DashboardController extends Controller
{
    public function index (){
      
        
		// jumlah mahasiswa
        $total_mahasiswa = DB::table('users')->where('level','users')->count();

        $total_mahasiswa_persen = 100;

        $persentase_mahasiswa = ($total_mahasiswa / $total_mahasiswa_persen) * 100;

        // Jumlah logbook

        $total_logbook = DB::table('logbook')->where('user_id', auth()->id())->count();
        $total_logbook_persen = 100;

        $persentase_logbook = ($total_logbook / $total_logbook_persen) * 100;

        $tahun = date('Y');
        $bulan = date('m');
        for ($i=1; $i <= $bulan ; $i++){
            $totalLogbook = DB::table('logbook')->whereYear('created_at', $tahun)->whereMonth('created_at', $i)->where('user_id', auth()->id())->count();
            $databulan[] = Carbon::create()->month($i)->format('F');
            $dataTotalLogbook[] =  $totalLogbook;


        }
//         $totalLogbooks = [];
// $bulanSekarang = date('m');
// $tahunSekarang = date('Y');
// for ($bulan = 1; $bulan <= $bulanSekarang; $bulan++) {
//     $totalLogbook = DB::table('logbook')
//         ->whereYear('created_at', $tahunSekarang)
//         ->whereMonth('created_at', $bulan)
//         ->where('user_id', auth()->id())
//         ->count();
//     $totalLogbooks[] = $totalLogbook;
// }


        $chart = (new LarapexChart)->lineChart()
        ->setTitle('Mahsiswa Grafik')
        ->setSubtitle('Total LogBook Setiap Bulan')
        ->setXAxis($databulan)
        ->setHeight(300)
        // ->setColors(['#37DBFF'],['#E54CFD'])
        ->setDataset([
            [
                'name'  => 'Total Logbook',
                'data'  => $dataTotalLogbook,
            ]
          
        ]);        
		$data = array(  'title'     => 'welcome users',
                        'total_mahasiswa'     => $total_mahasiswa,
                        'persentase_mahasiswa'     => $persentase_mahasiswa,
                        'total_logbook'     => $total_logbook,
                        'persentase_logbook'     => $persentase_logbook,
                        'chart'     => $chart,
                        'content'   => 'user/dashboard/index'
                    );
        return view('layout/wrapper',$data);
    
    }
}
