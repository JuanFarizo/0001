<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\Producto;
use App\Categoria;
class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contacto::paginate(8);        
        return view('listadoConsultas', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $contacto = Contacto::all();
        return view('contacto', compact('contacto', 'producto', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $categorias = Categoria::all();
        $reglas = [
            'nombre' => 'required|string',
            'email' => 'required|email',
            'tema' => 'required|string',
            'cuerpo' =>'required|string|max:200'
            ];

        $errors = [
            'required' => 'El campo :attribute es requerido',
            'string' => 'El campo :attribute debe ser un texto',
            'max' => 'El campo :attribute tiene mas :max letras',
            'email' => 'El campo :attribute tiene que ser un email'          
        ];

        $this->validate($request, $reglas, $errors);

        $contacto = new Contacto ();
        $contacto->nombre = $request['nombre'];
        $contacto->email = $request['email'];
        $contacto->tema = $request['tema'];
        $contacto->cuerpo = $request['cuerpo'];
        $contacto->respondida = 0;
        $contacto->save();
        
        return view('formularioEnviado')->with(compact('categorias'));
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
        //
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
        $contactos = Contacto::all();
        $categorias = Categoria::all();
        $contacto = Contacto::find($id);
        $contacto->respondida = 1;
        $contacto->save();
        return redirect('admin/contacto')->with(compact('contactos', 'categorias'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
