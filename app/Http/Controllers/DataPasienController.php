<?php

namespace App\Http\Controllers;

use App\Models\DataPasien;
use Illuminate\Http\Request;

class DataPasienController extends Controller
{
    protected $pasien;

    public function __construct(DataPasien $pasien)
    {
        $this->pasien = $pasien;
    }

    public function index()
    {
        $pasiens = $this->pasien->getDataPasien();
        return view('dashboard.pasien.index', compact('pasiens'));
    }
    public function read()
    {
        $pasiens = $this->pasien->getDataPasien();
        return view('dashboard.pasien.tabel', compact('pasiens'));
    }


    public function store(Request $request)
    {
        $this->pasien->createDataPasien($request);
        session()->flash('alert', [
            'title' => 'Sukses',
            'message' => 'Data berhasil ditambahkan!',
            'type' => 'success'
        ]);
        return back();
    }

    public function edit($id)
    {
        $pasien = $this->pasien->getDataPasien()->where('id', $id)->first();
        // dd($pasien);
        // return view('dashboard.pasien.index', compact('pasien'));
        return response()->json($pasien);
    }

    public function update(Request $request, $id)
    {
       
       
        $pasien = $this->pasien->getDataPasien()->where('id', $id)->first();
        $pasien->updateDataPasien($request);
        return response()->json(['message' => 'Data pasien berhasil diperbarui']);
    }

    public function destroy($id)
    {
 
        DataPasien::where('id', $id)->delete();



        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus.',
        ]);
    }
}
