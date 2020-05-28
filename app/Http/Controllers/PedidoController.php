<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\Producto;
use App\Carrito;
use App\Pedido;

class PedidoController extends Controller{

    //crear pedido
   
   $pedido = Pedido::create([
    $pedido->estado = 0;
    $pedido->total = $request['total'];
    $pedido->items = $items;
   ]);
  
 //items = session()->get('carrito');
    
    

    public function index()
    {
        $pedidos = Pedido::all();        
        return view('admin/pedidos', compact('pedidos'));
    }
    
    public function store(Request $request) {
        
        $items = session()->get('carrito');
    }

    public function update(Request $request, $id)
    {
        $pedidos = Pedido::all();
        $categorias = Categoria::all();
        $pedido = Pedido::find($id);
        $pedido->estado = 0;
        $contacto->save();
        return redirect('admin/pedidos')->with(compact('pedidos', 'categorias'));
    }


}
