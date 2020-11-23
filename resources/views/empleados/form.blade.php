
<div class="row">

    <div class="col-md-6">
        <div class="form-group">
        <label for="NombreEmpleado">{{'Nombre del Empleado'}}</label>
        <input class="form-control" type="text" name="NombreEmpleado" id="NombreEmpleado" value="{{ isset($empleado->NombreEmpleado) ? $empleado->NombreEmpleado:'' }}" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
        <label for="ApellidoEmpleado">{{'Apellido del Empleado'}}</label>
        <input class="form-control" type="text" name="ApellidoEmpleado" id="ApellidoEmpleado" value="{{ isset($empleado->ApellidoEmpleado) ? $empleado->ApellidoEmpleado:'' }}" required>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
        <label for="EmailEmpleado">{{'Email del Empleado'}}</label>
        <input class="form-control" type="text" name="EmailEmpleado" id="EmailEmpleado" value="{{ isset($empleado->EmailEmpleado) ? $empleado->EmailEmpleado:'' }}" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Telefono">{{'Telefono del Empleado'}}</label>
            <input class="form-control" type="text" name="Telefono" id="Telefono" value="{{ isset($empleado->Telefono) ? $empleado->Telefono:'' }}" required>
        </div>    
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="id_Empresa">{{'Empresa'}}</label>
            @if(isset($empleado))
                <select class="form-control" name="id_Empresa" id="id_Empresa">
                    @foreach ($empresas as $empresa)
                        <option value="{{$empresa->id}}" 
                            @if($empresa->id == $empleado->id_Empresa) 
                                selected="selected" 
                            @endif >{{$empresa->Name}}
                        </option>
                    @endforeach
                </select>
            @else
                <select class="form-control" name="id_Empresa" id="id_Empresa">
                    @foreach ($empresas as $empresa)
                        <option value="{{$empresa->id}}">{{$empresa->Name}}</option>
                    @endforeach
                </select>
            @endif
        </div>    
    </div>
<br/>

            <input style="margin: 20px" class="btn btn-info" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">


            <a href="{{ url('empleados') }}" style="margin: 20px" class="btn btn-info">Regresar</a>

</div>
