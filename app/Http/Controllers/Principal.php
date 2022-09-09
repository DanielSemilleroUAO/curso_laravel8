<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class Principal extends Controller
{
    public function index()
    {
        return view('nosotros.index');
    }

    public function create()
    {
        // $autors = Autor::all();
        $autors = Autor::paginate();
        return view('nosotros.autores', compact('autors'));
    }

    public function show()
    {
        $autors = Autor::all();
        return view('nosotros/informacion', compact('autors'));
    }
}
