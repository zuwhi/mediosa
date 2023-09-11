<?php

namespace App\Http\Controllers;

use App\Models\DataPasien;
use App\Models\DataPenyakit;
use Illuminate\Http\Request;
use App\Models\RiwayatPasien;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
        public function index(){
        $jumlahPasien = DataPasien::count();
        $tanggalHariIni = date('Y-m-d');
        $jumlahPasienHariIni = DataPasien::whereDate('created_at', $tanggalHariIni)->count();


        $today = date('Y-m-d');
        $day = date('d');
        $bulan = date('m');
        $tahun = date('Y');
        $trendPenyakit = RiwayatPasien::join('data_penyakits', 'riwayat_pasiens.data_penyakit_id', '=', 'data_penyakits.id')
            ->select('data_penyakits.nama', DB::raw('COUNT(*) as jumlah_penyakit'))
            ->whereMonth('riwayat_pasiens.created_at', $bulan)
            ->whereYear('riwayat_pasiens.created_at', $tahun)
            ->groupBy('data_penyakits.nama')
            ->orderByDesc('jumlah_penyakit')
            ->limit(6)
            ->get();
        
      

        $topPenyakit = RiwayatPasien::join('data_penyakits', 'riwayat_pasiens.data_penyakit_id', '=', 'data_penyakits.id')
            ->select('data_penyakits.nama', DB::raw('COUNT(*) as jumlah_penyakit'))
            ->whereMonth('riwayat_pasiens.created_at', $bulan)
            ->whereYear('riwayat_pasiens.created_at', $tahun)
            ->groupBy('data_penyakits.nama')
            ->orderByDesc('jumlah_penyakit')
            ->limit(1) // Mengambil yang paling banyak muncul
            ->first();

        $namaPenyakit = [];
        $jumlahPenyakit = [];
        foreach ($trendPenyakit as $penyakit) {
            $namaPenyakit[] = $penyakit->nama;
            $jumlahPenyakit[] = $penyakit->jumlah_penyakit;
        }

        $solusi = DataPenyakit::where('nama', $namaPenyakit)->first();

        $bulanIndonesia = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
        $bulanAngka = date('n'); 
        $bulanSekarang = $bulanIndonesia[$bulanAngka - 1];
        
        return view('dashboard.index', compact('bulanSekarang','solusi','namaPenyakit', 'jumlahPenyakit', 'topPenyakit', 'jumlahPasien', 'jumlahPasienHariIni'));
    }
}
