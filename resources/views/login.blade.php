@extends('templates/inicial')

@section('titulo')
Ingresar
@endsection
    
@section('formulario-cardbody')
<h5 class="card-title">Ingreso usuario</h5>
<p class="card-text">Favor ingresar</p>
<form action="" method="get">
    <label for="user">Usuario</label>
    <input type="text" name="user" id="user" required>
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" required>
</form>
@endsection

@section('formulario-cardfooter')
<a href="register" class="btn btn-outline-primary btn-sm">Registrarse</a>

<a href="login" class="btn btn-outline-primary btn-sm">Ingreso</a>
@endsection