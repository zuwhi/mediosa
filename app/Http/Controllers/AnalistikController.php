<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\DataPasien;
use App\Models\DataPenyakit;
use Illuminate\Http\Request;
use App\Models\RiwayatPasien;
use Illuminate\Support\Facades\DB;

class AnalistikController extends Controller
{
    protected $riwayat;

    public function __construct(RiwayatPasien $riwayat)
    {
        $this->riwayat = $riwayat;
    }

    public function index(){
      

    ///////////////////// End Trend Penyakit ///////////////////////


    ///////////////////// Start Rekap bulanan ///////////////////////
         $daftarBulan = ['', 'januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember'];

    ///////////////////// End rekap bulanan ///////////////////////
    
        $yearAgo = date('Y-m-d', strtotime('-1 year'));
    
        $topTrends = RiwayatPasien::join('data_penyakits', 'riwayat_pasiens.data_penyakit_id', '=', 'data_penyakits.id')
            ->select('data_penyakits.nama', DB::raw('COUNT(*) as jumlah_penyakit'))
            ->groupBy('data_penyakits.nama')
            ->orderByDesc('jumlah_penyakit')
            ->limit(6) // Mengambil 6 tren penyakit teratas
            ->get();
    
        $dataForChart = [];
        $months = [];
    
        foreach ($topTrends as $trend) {
            $trendPenyakit = $trend->nama;
    
            $trendData = RiwayatPasien::join('data_penyakits', 'riwayat_pasiens.data_penyakit_id', '=', 'data_penyakits.id')
                ->select(DB::raw('YEAR(riwayat_pasiens.created_at) as year'), DB::raw('MONTH(riwayat_pasiens.created_at) as month'), DB::raw('COUNT(*) as jumlah_penyakit'))
                ->whereDate('riwayat_pasiens.created_at', '>=', $yearAgo)
                ->where('data_penyakits.nama', $trendPenyakit)
                ->groupBy('year', 'month')
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc')
                ->get();
    
            foreach ($trendData as $data) {
                $yearMonth = $data->year . '-' . str_pad($data->month, 2, '0', STR_PAD_LEFT); // Format: YYYY-MM
                if (!in_array($yearMonth, $months)) {
                    $months[] = $yearMonth;
                }
                $dataForChart[$trendPenyakit][$yearMonth] = $data->jumlah_penyakit;
            }
        }
    
        sort($months); // Mengurutkan bulan secara kronologis
    
        
        return view('dashboard.analistik.index', compact('daftarBulan','months','dataForChart'));
    }


    function getTable(Request $request){
              $bulan = $request->bulan;
              $tahun = $request->tahun;
              
        // $tahun = $request->tahun;
   

        $table = RiwayatPasien::join('data_penyakits', 'riwayat_pasiens.data_penyakit_id', '=', 'data_penyakits.id')
            ->select('data_penyakits.nama', DB::raw('COUNT(*) as jumlah_penyakit'))
            ->whereMonth('riwayat_pasiens.created_at', $bulan)
            ->whereYear('riwayat_pasiens.created_at', $tahun)
            ->groupBy('data_penyakits.nama')
            ->orderByDesc('jumlah_penyakit')
            ->get();


        return view('dashboard.analistik.table', compact('table'));
    }

    function getGrafik(Request $request){
         $tahun = $request->tahun;
         $bulan = $request->bulan;

        $trendPenyakit = RiwayatPasien::join('data_penyakits', 'riwayat_pasiens.data_penyakit_id', '=', 'data_penyakits.id')
            ->select('data_penyakits.nama', DB::raw('COUNT(*) as jumlah_penyakit'))
            ->whereMonth('riwayat_pasiens.created_at', $bulan)
            ->whereYear('riwayat_pasiens.created_at', $tahun)
            ->groupBy('data_penyakits.nama')
            ->orderByDesc('jumlah_penyakit')
            ->limit(6)
            ->get();
           
        $namaPenyakit = [];
        $jumlahPenyakit = [];
        foreach ($trendPenyakit as $penyakit) {
            $namaPenyakit[] = $penyakit->nama;
            $jumlahPenyakit[] = $penyakit->jumlah_penyakit;
        }
        $data = [
        'namaPenyakit' => $namaPenyakit,
        'jumlahPenyakit' => $jumlahPenyakit,
        'bulan' => $bulan,
        'tahun' => $tahun,
    ];


return response()->json($data);
        

    }


}
