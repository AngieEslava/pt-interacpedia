@extends('layouts.app')

<form method="post" action="{{url('/empresas')}}" enctype="multipart/form-data">
{{ csrf_field() }}

@include('empresas.form',['Modo'=>'crear'])



</form>


<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title make up the bulk of the card content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>