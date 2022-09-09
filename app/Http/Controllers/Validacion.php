<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Validator;
use App\Models\Autor;
use Illuminate\Http\Request;

class Validacion extends Controller
{
    public function store(Request $request)
    {
        //validar la información
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
        ]);

        // return $request;
        $dato = new Autor;
        $dato->nombre = $request->nombre;
        $dato->email = $request->correo;
        $dato->save();
        return $dato;
    }
}
