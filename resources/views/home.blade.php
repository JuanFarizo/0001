@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>¡Bienvenido!</h2>
                    <a href="/inicio" "><input style="background-color:#ff7f8c" type="submit" value="Ir al sitio"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
