<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return "Carrito de compras activado";
    }

    public function show($product)
    {
        return view('products.show', compact('product'));
    }
}
