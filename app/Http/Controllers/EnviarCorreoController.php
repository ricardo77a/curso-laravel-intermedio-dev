<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\EnviarSaludo;

class EnviarCorreoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $correo = 'ricardo_77a@hotmail.com';
        Mail::to($correo)->send(new EnviarSaludo);
        return back()->with('message-success', 'Correo enviado');
    }
}
