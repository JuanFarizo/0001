<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\Producto;
use App\Carrito;
use App\Pedido;

class PedidoController extends Controller{



    public function store(Request $request) {
        $pedido = new Pedido;
        $total = 0;
        $carrito = session()->get('carrito');
        foreach($carrito as $producto){
            $total += $producto['precio'] * $producto['cantidad'];
        }
        $pedido->total = $total;
        $pedido->items = session()->get('carrito');
        $pedido->user_id = auth()->id();
        $pedido->save();
        session()->forget('carrito');
        return redirect('/inicio')->with('success', 'Compra finalizada!');
    }


    public function index()
    {
        $pedidos = Pedido::paginate(3);
        $usuarios = User::all();        
        return view('listadoPedidos', compact('pedidos', 'usuarios'));
    }

    public function update(Request $request, $id)
    {
        $pedidos = Pedido::all();
        $pedido = Pedido::find($id);
        $pedido->estado = 1;
        $pedido->save();
        return redirect('admin/pedido')->with(compact('pedidos'));
    }


    //crear pedido
   
//     $pedido = Pedido::create([
//     $pedido->estado = 0;
//     $pedido->total = $request['total'];
//     $pedido->items = $items;
//    ]);
  
 //items = session()->get('carrito');
    
    
    
    // public function store(Request $request) {
        
    //     $items = session()->get('carrito');
    // }

    // public function update(Request $request, $id)
    // {
    //     $pedidos = Pedido::all();
        
    //     $pedido = Pedido::find($id);
    //     $pedido->estado = 0;
    //     $contacto->save();
    //     return redirect('admin/pedidos')->with(compact('pedidos'));
    // }


}
