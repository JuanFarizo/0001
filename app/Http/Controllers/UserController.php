<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller {
  
  public function index(){
    $usuarios = User::paginate(6);
    return view('listadoUsuarios', compact('usuarios'));
  }


  public function show($id) {
   $usuario = User::find($id);
  return view('perfil-usuario', compact("usuario"));
  }


    public function edit($id){
      $usuario = User::findOrFail($id);
      $data = ['usuario' => $usuario];
      return view('editarPerfil', compact("usuario"));
    }


  
    public function update(Request $request, $id) {
      $usuario = User::find($id);
      $usuario->name = $request["name"];
      $usuario->lastname = $request["lastname"];
      $usuario->email = $request["email"];

      if(isset($request['avatar'])){
      $extension = $request->file('avatar')->getClientOriginalExtension();
      $ruta = $request->file('avatar')->storeAs('public/avatars',"_" . uniqid() . "." . $extension);
        $nombreDelArchivo = basename($ruta);
      $usuario->avatar = $nombreDelArchivo;
    }
    
      $usuario->save();
     return redirect('/perfil-usuario/{id}')->with(compact("usuario"));
  }






}
