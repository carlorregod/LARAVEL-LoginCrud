@extends('templates/inicial')

@section('titulo')
Ingresar
@endsection
    
@section('formulario-cardbody')

@if(Session::has('message-error'))
<div class="alert alert-danger" role="alert">
<h6 class="alert-heading">{{Session::get('message-error')}}</h6>
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h5 class="card-title">Ingreso usuario</h5>
<p class="card-text">Favor ingresar</p>
<form action="ingresar" method="POST">
        {{ csrf_field() }}
    <label for="user">Usuario</label>
    <input type="text" name="user" id="user" required>
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" required>
    <hr class="border-success my-2">
    <a href="register" class="btn btn-outline-primary btn-sm">Registrarse</a>
    <input type="submit" class="btn btn-outline-primary btn-sm" value="Ingreso">
</form>
@endsection