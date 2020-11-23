@extends('layouts.app')

@section('content')

<div class="container">

<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Formulario para Registrar Empleados</h5>

        <form method="post" action="{{url('/empleados')}}" enctype="multipart/form-data">
        {{ csrf_field() }}

        @include('empleados.form',['Modo'=>'crear'])
        </form>
  </div>
</div>

</div>


@endsection



