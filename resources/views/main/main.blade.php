@extends('templates/inicial')

@section('titulo')
Bienvenido al sistema
@endsection

@section('formulario-cardbody')
<h5 class="card-title">Bienvenido al sistema</h5><br>
<h6>Usuario: {!! Auth::user()->nombre !!}</h6>

@endsection

@section('formulario-cardfooter')
<form method="POST" action="/login/logout">
    {{ csrf_field() }}
    <button name="btnSalir" id="btnSalir" class="btn btn-primary">Salir</button>
</form>
@endsection