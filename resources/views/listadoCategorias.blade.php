@extends('layouts.master')

@section('title', 'Categorias')



@section('content')
<div class="container-fluid">

  <table class="table" style="background-color: #fff; width:40%;">
              
              <thead style="background-color: #face92">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Descripción</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
                      @foreach ($categorias as $categoria)
                      <tbody>
                          <tr>
                              <td>{{$categoria->id}}</td>
                              <td>{{$categoria->nombre}}</td>
                              <td>{{$categoria->descripcion}}</td>   
                              <td>
                                  @if ($categoria->esLibro)
                                  Libro	
                                  @else
                                  Papeleria
                                  @endif		
                              </td>      
                              <td><button style="background-color:#42a5f5" class="btn btn-primary1"><a href="categoria/{{$categoria->id}}/edit"><i class="far fa-edit"></i></a></button></td>
                              <td><form action="categoria/{{$categoria->id}}/" method="post">
                                  {{csrf_field()}}
                                  {{method_field('DELETE')}}
                                  <button style="background-color:#ef5350" class="btn btn-primary1" type="submit"><i class="fas fa-trash"></i></button></button>
                                  </form>
                    </tr>
                </tbody>
                @endforeach
              </table>
            
</div>
@endsection