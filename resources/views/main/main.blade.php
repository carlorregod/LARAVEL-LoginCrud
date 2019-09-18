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

@section('body-principal')

<div id="tag_container" style="height: 200px !important;">
<table class="table table-striped table-fixed" style="position: relative; margin: auto; align: center;  max-width: 150px;">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Edad</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $value)
        <tr>
            <td>{{ $value->nombre }}</td>
            <td>{{ $value->direccion }}</td>
            <td>{{ $value->telefono }}</td>
            <td>{{ $value->edad }}</td>
        </tr>
        @endforeach
    </tbody>
    
  </table>
  {!! $data->render() !!}
</div>
@endsection

@section('javascript')
<script src="{{asset('js/tabla-inicial.js')}}"></script>
@endsection