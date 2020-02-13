<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImportarExcelRequest;

use App\Imports\BecariosImport;
use App\Exports\ExportarBecariosExport;
use Excel;
use PDF;
use App\Becario;
use DB;

class BecariosController extends Controller
{
    public function importar(ImportarExcelRequest $request)
    {
    	Excel::import(new BecariosImport, $request->documento);
        return back()->with('message-success', 'Documento subido con éxito.');
    }

    public function exportar()
    {
 		return Excel::download(new ExportarBecariosExport, 'Becarios.xlsx');
    }

    public function pdf()
    {
    	$becarios = Becario::inRandomOrder()->get()->take(50);
		$pdf = PDF::loadview('reportes.becarios', compact('becarios'));
        return $pdf->stream('reporte.pdf', array("Attachment" => 0));    	
    }

    public function grafica()
    {
        $becarios = Becario::select( 
            DB::raw('SUM(IF(becarios.sexo = "MASCULINO", 1, 0)) masculino'),
            DB::raw('SUM(IF(becarios.sexo = "FEMENINO", 1, 0)) femenino')
        )
        ->first();

        $masculino = Becario::where('sexo', 'MASCULINO')->count();
        $femenino = Becario::where('sexo', 'FEMENINO')->count();
        return view('grafica.grafica', compact('becarios', 'masculino', 'femenino'));
    }
}
