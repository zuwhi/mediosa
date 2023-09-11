<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class PenggunaController extends Controller
{
    protected $pengguna;

    public function __construct(User $pengguna)
    {
        $this->pengguna = $pengguna;
    }

    public function index() 
    {
        $penggunas = $this->pengguna->getPengguna();
        return view('dashboard.pengguna.index', compact('penggunas'));
    }

    public function store(Request $request)
    {
        $this->pengguna->createPengguna($request);
         session()->flash('alert', [
        'title' => 'Sukses',
        'text' => 'Data berhasil ditambahkan!',
        'type' => 'success'
    ]);
        return back();
    }

    public function edit($id)
    {
        $pengguna = $this->pengguna->getPengguna()->where('id', $id)->first();
        // dd($pengguna);
        // return view('dashboard.pengguna.index', compact('pengguna'));
        return response()->json($pengguna);
    }

    public function update(Request $request, $id)
    {
        $pengguna = $this->pengguna->getPengguna()->where('id', $id)->first();
        $pengguna->updatePengguna($request);
         return response()->json(['message' => 'Data pengguna berhasil diperbarui', 'reload' => true]);
        
    }

    public function destroy($id)
    {
        $this->pengguna->deletePengguna($id);
        session()->flash('hapus', [
            'title' => 'Sukses',
            'text' => 'Data berhasil dihapus.',
            'type' => 'success'
        ]);

    return back();
        return back();
    }
}
