@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<br/>
<br/>
<a class="btn btn-info" href="{{ url('empleados/create') }}">Agregar Empleado</a>
<br/>
<br/>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Nombre </th>
            <th>Apellido </th>
            <th>Email </th>
            <th>Telefono </th>
            <th>Empresa</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$empleado->NombreEmpleado}}</td>
            <td>{{$empleado->ApellidoEmpleado}}</td>
            <td>{{$empleado->EmailEmpleado}}</td>
            <td>{{$empleado->Telefono}}</td>
            <td>{{$empleado->Name}}</td>

            <td> 
            <div class="row" > 
                <div>
                    <a class="btn btn-info" style="margin: 2px" href="{{ url('/empleados/'.$empleado->id.'/edit') }}">Editar</a>
                </div>
            <div>
                <form method="post" action="{{ url('/empleados/'.$empleado->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button class="btn btn-info" style="margin: 2px" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                </form>
            </div>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection

