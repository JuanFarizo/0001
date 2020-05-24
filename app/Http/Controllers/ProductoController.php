<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(4);
        $categorias = Categoria::all();
        return view('listadoProductos', compact('productos', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('cargarProductos', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'nombre' => 'required|string',
            'imagen' => 'required|file',
            'descripcion' =>'required|string|max:200',
            'precio' => 'required|integer',
            'stock' => 'required|integer',
            'categoria_id' => 'required|integer'
            ];

        $errors = [
            'required' => 'El campo :attribute es requerido',
            'string' => 'El campo :attribute debe ser un texto',
            'max' => 'El campo :attribute tiene mas :max letras',
            'integer' => 'El campo :attribute debe ser un numero entero'            
        ];

        $this->validate($request, $reglas, $errors);

                $producto = new Producto();
                
                $ruta = $request->file('imagen')->store('public');

                $nombreImagen = basename($ruta);

                $producto->imagen = $nombreImagen;
                $producto->nombre = $request['nombre'];
                $producto->descripcion = $request['descripcion'];
                $producto->precio = $request['precio'];
                $producto->stock = $request['stock'];
                $producto->categoria_id = $request['categoria_id'];

                $producto->save();

                return redirect('/admin/producto')->with(compact('producto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        
        return view('editarProductos', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $reglas = [
            'nombre' => 'required|string',
            'imagen' => 'required|file',
            'descripcion' =>'required|string|max:200',
            'precio' => 'required|integer',
            'stock' => 'required|integer',
            'categoria_id' => 'required|integer'
            ];

        $errors = [
            'required' => 'El campo :attribute es requerido',
            'string' => 'El campo :attribute debe ser un texto',
            'max' => 'El campo :attribute tiene mas :max letras',
            'integer' => 'El campo :attribute debe ser un numero entero'
        ];

        $this->validate($request, $reglas, $errors);

                $producto = Producto::find($id);                
                $ruta = $request->file('imagen')->store('public');
                $nombreImagen = basename($ruta);
                $producto->imagen = $nombreImagen;
                $producto->nombre = $request['nombre'];
                $producto->descripcion = $request['descripcion'];
                $producto->precio = $request['precio'];
                $producto->stock = $request['stock'];
                $producto->categoria_id = $request['categoria_id'];

                $producto->save();

                return redirect('/admin/producto')->with(compact('producto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categorium)
    {
        $producto = Producto::find($categorium);
        $producto->delete();
        return redirect('/admin/producto'); 
    }
}
