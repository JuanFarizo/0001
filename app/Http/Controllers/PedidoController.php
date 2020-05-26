<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\Producto;
use App\Carrito;

class PedidoController extends Controller{
    public function crearPedido(){
        $pedido = session()->get('carrito');
        
        return view('listadoPedidos', compact('pedido'));
    }

    public function index(){
        $pedido = session()->get('carrito');
        $pedido = Pedido::paginate(4);
        $productos = Producto::all();
        return view('listadoPedidos', compact('pedido', 'productos'));
    }
    
    public function store($id) {
        $productos = Producto::all();
        $categorias = Categoria::all();
        $pedido = session()->get('carrito');
        
        return back();
        //contacto->respondida = 1;
        $request->save();
        return redirect('admin/pedidos')->with(compact('pedido', 'categorias', 'productos'));
    }

}
