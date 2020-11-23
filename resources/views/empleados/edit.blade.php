@extends('layouts.app')
@section('content')


<div class="container">

<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Formulario para Registrar Empleados</h5>

<form method="post" action="{{url('/empleados/' . $empleado->id)}}" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}


@include('empleados.form',['Modo'=>'editar'])



</form>
</div>
</div>

</div>


@endsection
