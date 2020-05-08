<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
//prueba de un push
class PrincipalController extends Controller
{
    public function inicio () {
        $productos = Producto::all();
        $categorias = Categoria::all();
        return view('libreria', compact('productos', 'categorias'));
    }
    
    public function productosCategoria($id)
    {
        $categorias = Categoria::all();
        $productos = Producto::all();
        $productosFiltrados = Categoria::find($id)->productos;
        return view('productosCategoria', compact('categorias', 'productos', 'productosFiltrados', 'id'));
    }

    public function muestraProductos () {
        $productos = Producto::paginate(6);
        $categorias = Categoria::all();
        $categoriaLibros = Categoria::where('esLibro', 1)->get();
        $categoriaPapeleria = Categoria::where('esLibro', 0)->get();
        return view('muestraProductos', compact('productos', 'categorias', 'categoriaLibros', 'categoriaPapeleria'));
    }

}
