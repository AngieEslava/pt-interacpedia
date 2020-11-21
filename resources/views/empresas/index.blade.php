@extends('layouts.app')

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<br/>
<br/>
<a href="{{ url('empresas/create') }}">Agregar Empresa</a>
<br/>
<br/>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Logo</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Website</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empresas as $empresa)
        <tr>
            <td>{{$loop->iteration}}</td>

            <td>

            <img src="{{ asset('storage').'/'.$empresa->Logo}}" alt="" width="100" heigth="100">

            {{$empresa->Logo}}

            </td>
            
            <td>{{$empresa->Name}}</td>
            <td>{{$empresa->Email}}</td>
            <td>{{$empresa->Website}}</td>
            <td> 
            
            <a href="{{ url('/empresas/'.$empresa->id.'/edit') }}">
            Editar</a>
            
            | 
            
            <form method="post" action="{{ url('/empresas/'.$empresa->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            
            
            </form>
            
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

