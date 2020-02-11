<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImportarExcelRequest;

use App\Imports\BecariosImport;
use Excel;

class BecariosController extends Controller
{
    public function importar(ImportarExcelRequest $request)
    {
    	Excel::import(new BecariosImport, $request->documento);
        return back()->with('message-success', 'Documento subido con éxito.');
    }
}
