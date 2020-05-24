<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class CarritoController extends Controller{
    
    
    
    //Mostrar carrito
    public function carrito(){
        return view('carrito');
    }
    
    //Agregar producto al carrito
    public function add($id){
        $producto = Producto::find($id);
        
        $carrito = session()->get('carrito');
        
        if($carrito){
            
            if(isset($carrito[$id])){
                
                $carrito[$id]['cantidad']+=1;
            } else {
                
                $carrito[$id] = [
                    "nombre" => $producto->nombre,
                    "cantidad" => 1,
                    "precio" => $producto->precio,
                    "imagen" => $producto->imagen  
                ];
            }
        } else {
            
            $carrito = [
                $id => [
                    "nombre" => $producto->nombre,
                    "cantidad" => 1,
                    "precio" => $producto->precio,
                    "imagen" => $producto->imagen,
                    ]
            ];  
        }

        session()->put('carrito', $carrito);
        return back();
    }
    
    //Eliminar producto del carrito
    public function delete($id){
        
        $producto = Producto::find($id);
        
        $carrito = session()->get('carrito');
        unset($carrito[$producto->id]);
        session()->put('carrito', $carrito);
        return view('carrito', compact('carrito', 'producto'));
    }


    //public function checkout(){
        // bsjar los productos de la session
        // crear el pedido con los items que compro el usuario
        // modelo pedido 
        //user_id  unsignedinteger
        // items text -> session()->get('carrito')
        //total
         ///estado 
        //  flash('dGracias por comprar con nosotros')
        //  back()
    
    //}
}