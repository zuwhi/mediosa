<?php

namespace App\Http\Controllers;

use App\Models\DataPenyakit;
use Illuminate\Http\Request;

class DataPenyakitController extends Controller
{
    protected $penyakit;

    public function __construct(DataPenyakit $penyakit)
    {
        $this->penyakit = $penyakit;
    }

    public function index()
    {
        $penyakits = $this->penyakit->getDataPenyakit();
        return view('dashboard.penyakit.index', compact('penyakits'));
    }

    public function store(Request $request)
    {
        $this->penyakit->createDataPenyakit($request);
        return back();
    }

    public function edit($id)
    {
        $penyakit = $this->penyakit->getDataPenyakit()->where('id', $id)->first();
        // dd($penyakit);
        return view('dashboard.penyakit.edit', compact('penyakit'));
    }

    public function update(Request $request, $id)
    {
        $penyakit = $this->penyakit->getDataPenyakit()->where('id', $id)->first();
        $penyakit->updateDataPenyakit($request);
        return redirect(route('penyakit.index'));
    }

    public function destroy($id)
    {
        $this->penyakit->deleteDataPenyakit($id);
        return back();
    }
}
