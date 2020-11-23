@extends('layouts.app')
@section('content')

<div class="container">

<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Formulario para Registrar Empresas</h5>
    
    <form method="post" action="{{url('/empresas')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    @include('empresas.form',['Modo'=>'crear'])

    </form>
    
  </div>
</div>

</div>


@endsection


