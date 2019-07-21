@extends('templates/inicial')

@section('titulo')
Registrarse
@endsection
    
@section('formulario-cardbody')

@php
  if(isset($cadena))
    echo '<li><strong>'.$cadena.'</strong></li>';  
@endphp

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h5 class="card-title">Registro nuevo usuario</h5>
<p class="card-text">Favor ingresar</p>
    <form action="registro_nuevo" method="POST">
        {{ csrf_field() }}
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="correo">Correo electrónico</label>
        <input type="email" name="correo" id="correo" required>
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user" required>
        <label for="password">Contraseña</label>
        <input type="password" name="pass" id="pass" required>
        <label for="password_confirm">Repetir contraseña</label>
        <input type="password" name="password_confirm" id="password_confirm" required>
        <hr class="border-success my-2">
        <input type="submit" class="btn btn-outline-primary btn-sm" value="Registro">
        <a href="login" class="btn btn-outline-primary btn-sm">Ingresar</a>
    </form>
       
@endsection