@extends('layouts.app')

<br/>
<form method="post" action="{{ url('/empresas/' . $empresa->id) }}" enctype = "multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('empresas.form',['Modo'=>'editar'])

</form>

