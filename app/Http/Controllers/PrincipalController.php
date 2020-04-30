<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class PrincipalController extends Controller
{
    public function inicio () {
        $productos = Producto::all();
        $libros = Producto::where('esLibro', 1)->get();
        $papeleria = Producto::where('esLibro', 0)->get();
        $categorias = Categoria::all();
        $numerosUno = array();
        $numerosUno = range(0, count($libros)-1);
        shuffle($numerosUno); 
        $numerosDos = array();
        $numerosDos = range(0, count($papeleria)-1);
        shuffle($numerosDos); 
        return view('libreria', compact('productos', 'categorias', 'numerosUno', 'numerosDos', 'libros', 'papeleria'));
    }
    
    public function librosCategoria($id)
    {
        $categorias = Categoria::all();
        $productos = Producto::all();
       $muestraProductos = Producto::where('categoria_id', $id)->get();
       return view('productosCategoria', compact('muestraProductos', 'categorias', 'productos'));

    }

    public function muestraProductos () {
        $productos = Producto::paginate(6);
        $categorias = Categoria::all();
        return view('muestraProductos', compact('productos', 'categorias'));
    }

}
