@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<br/>
<br/>
<a class="btn btn-info" href="{{ url('empresas/create') }}">Agregar Empresa</a>
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
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empresas as $empresa)
        <tr>
            <td>{{$loop->iteration}}</td>

            <td>

            <img src="{{ asset('storage').'/'.$empresa->Logo}}" alt="" width="100" heigth="100">

            {{--  {{$empresa->Logo}}  --}}

            </td>
            
            <td>{{$empresa->Name}}</td>
            <td>{{$empresa->Email}}</td>
            <td>{{$empresa->Website}}</td>


            <td>
            <div class="row" > 
                <div >
                    <a  style="margin: 2px" class="btn btn-info"  href="{{ url('/empresas/'.$empresa->id.'/edit') }}">Editar</a>
                </div>
                <div >
                    <form method="post" action="{{ url('/empresas/'.$empresa->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button  style="margin: 2px"  class="btn btn-info"  type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                    </form>
                </div>            
            </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection

