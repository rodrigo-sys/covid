<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacientesController extends Controller
{
    function guardar(Request $req)
    {
        echo "Añadio datos de un paciente con exito :)";

        $paciente = new Paciente;

        $paciente->nombre = $req->nombre;
        $paciente->edad = $req->edad;
        $paciente->telefono = $req->telefono;
        $paciente->email = $req->email;

        $paciente->save();
    }
}
