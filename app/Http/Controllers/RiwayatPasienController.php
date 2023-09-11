<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPasien;
use App\Models\DataPasien;
use Illuminate\Http\Request;

class RiwayatPasienController extends Controller
{
    protected $riwayat;

    public function __construct(RiwayatPasien $riwayat)
    {
        $this->riwayat = $riwayat;
    }

    public function index()
    {
        $riwayatPasien = $this->riwayat->with(['dataPenyakit', 'dataPasien'])
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.riwayat.index', compact('riwayatPasien'));
    }
    public function show($id)
    {
        $pasien = DataPasien::find($id);
        $riwayatPasien = $this->riwayat->with(['dataPenyakit', 'dataPasien'])
            ->whereHas('dataPasien', function ($query) use ($id) {
                $query->where('id', $id);
            })
            ->get();
        $lokasiTubuh = [];
        foreach ($riwayatPasien as $patient) {
            $lokasiTubuh[] = $patient->dataPenyakit->lokasi_tubuh;
        }

        return view('dashboard.riwayat.detail', compact('pasien', 'riwayatPasien', 'lokasiTubuh'));
    }
    public function showForGuest(Request $request)
    {
        $username = $request->username;
        $pasien = DataPasien::where('username', $username)->first();
        if ($pasien) {
            $id = $pasien->id;
            $riwayatPasien = $this->riwayat->with(['dataPenyakit', 'dataPasien'])
                ->whereHas('dataPasien', function ($query) use ($id) {
                    $query->where('id', $id);
                })
                ->get();
            $lokasiTubuh = [];
            foreach ($riwayatPasien as $patient) {
                $lokasiTubuh[] = $patient->dataPenyakit->lokasi_tubuh;
            }

            return view('riwayat', compact('pasien', 'riwayatPasien', 'lokasiTubuh'));
        } else {
            return back()->with('status', 'Username tidak dikenali');;
        }
    }

    public function store(Request $request)
    {
        $this->riwayat->createDataRiwayat($request);
        return redirect()->route('riwayat.index')->with('success', 'Data berhasil disimpan!');
    }
}
