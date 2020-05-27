<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\Producto;
use App\Carrito;

class PedidoController extends Controller{

    //crear pedido

    public function crearPedido(){
        $productos = Producto::all();

        

        $pedido = session()->get('carrito');

        
        return back();
    }

    public function index(){

        $productos = Producto::all();

        $pedido = session()->get('carrito');

        
        
        return view('listadoPedidos', compact('pedido'));
    }
    
    public function store(Request $request) {
        $productos = Producto::all();
        $categorias = Categoria::all();
        $pedido = session()->get('carrito');
        
        return back();
        //contacto->respondida = 1;
        $request->save();
        return redirect('admin/pedidos')->with(compact('pedido', 'categorias', 'productos'));
    }

}
