<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class PrincipalController extends Controller
{
    public function inicio () {
        $productos = Producto::all();
        $categorias = Categoria::all();
        return view('inicio', compact('productos', 'categorias'));
    }
    
    public function productosCategoria($id)
    {
        $categorias = Categoria::all();
        $productos = Producto::all();
        $categoria = Categoria::find($id);
        $productosFiltrados = Categoria::find($id)->productos;
        return view('productosCategoria', compact('categorias', 'productos', 'productosFiltrados', 'categoria'));
    }

    public function muestraProductos () {
        $productos = Producto::paginate(6);
        $categorias = Categoria::all();
        $categoriaLibros = Categoria::where('esLibro', 1)->get();
        $categoriaPapeleria = Categoria::where('esLibro', 0)->get();
        return view('nuestrosProductos', compact('productos','categorias', 'categoriaLibros', 'categoriaPapeleria'));
    }

     //Muestra  detalle de producto
     public function show($id) {
        $producto = Producto::find($id);
        $categorias =  Categoria::all();
        $productosFiltrados = Categoria::find($id)->productos;
         return view('detalleProducto', compact('producto', 'categorias','productosFiltrados'));
    }

}
