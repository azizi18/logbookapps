<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Logbook;
use Carbon\Carbon;
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

        // jumlah mahasiswa
        $total_mahasiswa = DB::table('users')->where('level','users')->count();

        $total_mahasiswa_persen = 100;

        $persentase_mahasiswa = ($total_mahasiswa / $total_mahasiswa_persen) * 100;

        // Jumlah dosen

        $total_dosen = DB::table('users')->where('level','dosen')->count();
        $total_dosen_persen = 100;

        $persentase_dosen = ($total_dosen / $total_dosen_persen) * 100;

        // $logbookData = Logbook::pluck('jumlah_kegiatan', 'tanggal');
        $tahun = date('Y');
        $bulan = date('m');
        for ($i=1; $i <= $bulan ; $i++){
            $totalLogbook = DB::table('logbook')->whereYear('created_at', $tahun)->whereMonth('created_at', $i)->count();
            $totalusers = DB::table('users')->whereYear('created_at', $tahun)->whereMonth('created_at', $i)->where('id')->count();
            $totalmahasiswa = DB::table('users')->whereYear('created_at', $tahun)->whereMonth('created_at', $i)->where('level','users')->count();
            $totaldosen = DB::table('users')->whereYear('created_at', $tahun)->whereMonth('created_at', $i)->where('level','dosen')->count();

            $databulan[] = Carbon::create()->month($i)->format('F');
            $dataTotalLogbook[] = $totalLogbook;
            $dataTotalusers[] =  $totalusers;
            $dataTotalmahasiswa[] =  $totalmahasiswa;
            $dataTotaldosen[] =  $totaldosen;


        }


        $chart = (new LarapexChart)->lineChart()
        ->setTitle('Admin Grafik')
        ->setSubtitle('Total LogBook Setiap Bulan')
        ->setXAxis($databulan)
        ->setHeight(300)
        ->setDataset([
            [
                'name'  => 'Total Logbook',
                'data'  => $dataTotalLogbook,
            ],
            [
                'name'  => 'Total User',
                'data'  => $dataTotalusers,
            ],
            [
                'name'  => 'Total Mahasiswa',
                'data'  => $dataTotalmahasiswa,
            ],
            [
                'name'  => 'Total Dosen',
                'data'  => $dataTotaldosen,
            ]
        ]);   
       
        
		$data = array(  'title'     => 'welcome admin',
                        'total_users'     => $total_users,
                        'persentase_users'     => $persentase_users,
                        'total_logbook'     => $total_logbook,
                        'persentase_logbook'     => $persentase_logbook,
                        'total_mahasiswa'     => $total_mahasiswa,
                        'persentase_mahasiswa'     => $persentase_mahasiswa,
                        'total_dosen'            => $total_dosen,
                        'persentase_dosen'     => $persentase_dosen,
                        'chart'     =>  $chart,
                        'content'   => 'admin/dashboard/index'
                    );
        return view('layout/wrapper',$data);
    }

   
}
