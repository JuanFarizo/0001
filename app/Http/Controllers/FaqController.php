<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FAQ;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $preguntas = FAQ::all();
        return view('faq', compact('preguntas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $preguntas = FAQ::all();
       return view('cargarFaq', compact('preguntas'));
          
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $form)
    {
        $reglas = [
            'nombre' => 'required|string',
            'descripcion' =>'required|string|max:200'
            ];

        $errors = [
            'required' => 'El campo :attribute es requerido',
            'string' => 'El campo :attribute debe ser un texto',
            'max' => 'El campo :attribute tiene mas :max letras'    
        ];

        $this->validate($form, $reglas, $errors);

                $pregunta = new FAQ();
                $pregunta->nombre = $form['nombre'];
                $pregunta->descripcion = $form['descripcion'];
                
                $pregunta->save();

                return redirect('/faq/{id}')->with(compact('pregunta'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function show($id){
          
      $pregunta = FAQ::find($id);

      return view('/faq', compact('pregunta'));
     }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        
        
 }
}