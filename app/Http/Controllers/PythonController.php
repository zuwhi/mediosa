<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function diagnosis(Request $request)
    {   
        $inputData = $request->options_string;
        
        $pythonScriptPath = public_path('python_scripts/diagnosis.py');
        $command = "python \"$pythonScriptPath\" \"$inputData\"";
        $output = shell_exec($command);

        response()->json(['hasil' => $output]);
        return view('hasil_prediksi', ['hasil' => $output]);
    }
}
