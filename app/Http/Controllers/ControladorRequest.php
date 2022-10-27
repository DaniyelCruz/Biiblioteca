<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Condiciones;

class ControladorRequest extends Controller
{

    public function VP()
    { 
        return view('Principal');
    }

    public function VR()
    {
        return view('Registrar');
    }

    public function ProcesarRecuerdo(Condiciones $req)
    {
        return redirect()->route('P')->with('confirmacion','Tu recuerdo llego al controlador');
    }
}
