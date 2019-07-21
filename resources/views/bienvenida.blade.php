@extends('templates/inicial')

@section('titulo')
Nuevo
@endsection
    
@section('formulario-cardbody')
<h5 class="card-title">Bienvenida</h5>
<p class="card-text">Favor seleccione opción</p>
@endsection

@section('formulario-cardfooter')
<a href="register" class="btn btn-outline-primary btn-sm">Registrarse</a>

<a href="login" class="btn btn-outline-primary btn-sm">Ingresar</a>
@endsection