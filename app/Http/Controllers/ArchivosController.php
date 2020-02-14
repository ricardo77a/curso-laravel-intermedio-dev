<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archivo;

class ArchivosController extends Controller
{
    public function index()
    {
    	$archivos = Archivo::get();
    	return view('archivos.index', compact('archivos'));
    }

    public function store(Request $request)
    {
    	$archivo = new Archivo($request->all());
    	$path = $request->file('archivo')->store('public/archivos'); 
    	$archivo->ruta = $path;
    	$archivo->save();
    	return back()->with('message', 'el archivo se subió con éxito');
    }
}
