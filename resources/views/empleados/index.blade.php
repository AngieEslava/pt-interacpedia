@extends('layouts.app')

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<br/>
<br/>
<a href="{{ url('empleados/create') }}">Agregar Empleado</a>
<br/>
<br/>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Nombre del Empleado</th>
            <th>Apellido del Empleado</th>
            <th>Email del Empleado</th>
            <th>Telefono del Empleado</th>
            <th>Empresa</th>
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
            
            <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}">
                Editar
            </a>
            
            | 
            
            <form method="post" action="{{ url('/empleados/'.$empleado->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            
            
            </form>
            
            </td>
        </tr>
    @endforeach
    </tbody>
</table>



