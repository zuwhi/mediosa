<?php

namespace App\Http\Controllers;

use App\Models\DataPasien;
use Illuminate\Http\Request;
use App\Models\DataPenyakit;

class DiagnosisController extends Controller
{
    protected $pasien;

    public function __construct(DataPasien $pasien)
    {
        $this->pasien = $pasien;
    }
    public function index()
    {
        $pasiens = $this->pasien->getDataPasien();
        return view('dashboard.diagnosis.input', compact('pasiens'));
    }
    public function diagnosis(Request $request)
    {
        $inputData = $request->gejala;
        $pasien = $this->pasien->findDataPasien($request->pasien);
        try {
            $pythonResult = $this->runPythonScript($inputData);
            $data = json_decode($pythonResult, true);
            $akurasi = $data['akurasi'] * 100;
            $hasilDiagnosis = DataPenyakit::where('nama', $data['hasil_prediksi'])->first();
            if ($hasilDiagnosis) {
                return view('dashboard.diagnosis.result', compact(['inputData','hasilDiagnosis', 'akurasi', 'pasien']));
            } else {
                return view('dashboard.diagnosis.result', ['persentase' => 0,'hasilDiagnosis' => 'Penyakit Tidak Ditemukan','pasien' => $pasien,'inputData' => $inputData ]);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    private function runPythonScript($inputData)
    {
        $pythonScriptPath = public_path('python_scripts/diagnosis.py');
        $command = "python \"$pythonScriptPath\" \"$inputData\"";
        $output = shell_exec($command);
        $cleanedText = str_replace("\n", "", $output);

        return $cleanedText;
    }
}
