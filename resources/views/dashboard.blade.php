@extends('layouts.dash')

@section('contenido')
    
<h1>Bienvenido {{Auth::user()->name}} al administrador de la web! </h1>

@endsection