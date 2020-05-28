<?php

namespace App\Http\Controllers;
use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
  
    public function index(){
        $preguntas = Faq::all();
        return view('faq', compact('preguntas'));
    }


      public function create(){
        $preguntas = Faq::all();
       return view('faqCrear', compact('preguntas'));
          
      }
  
      public function store(Request $request)
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

        $this->validate($request, $reglas, $errors);

                $pregunta = new Faq();

                $pregunta->nombre = $request['nombre'];
                $pregunta->descripcion = $request['descripcion'];

                $pregunta->save();

                return redirect('/faq')->with(compact('pregunta'));
    }

    // public function show($id)
    // {
    //     $pregunta = Faq::find($id);
    //     return view('faq', compact('pregunta'));
    // }

}
