formulario empleados

<label for="NombreEmpleado">{{'Nombre del Empleado'}}</label>
<input type="text" name="NombreEmpleado" id="NombreEmpleado" value="{{ isset($empleado->NombreEmpleado) ? $empleado->NombreEmpleado:'' }}" required>
</br>

<label for="ApellidoEmpleado">{{'Apellido del Empleado'}}</label>
<input type="text" name="ApellidoEmpleado" id="ApellidoEmpleado" value="{{ isset($empleado->ApellidoEmpleado) ? $empleado->ApellidoEmpleado:'' }}" required>
</br>

<label for="EmailEmpleado">{{'Email del Empleado'}}</label>
<input type="text" name="EmailEmpleado" id="EmailEmpleado" value="{{ isset($empleado->EmailEmpleado) ? $empleado->EmailEmpleado:'' }}" required>
</br>

<label for="Telefono">{{'Telefono del Empleado'}}</label>
<input type="text" name="Telefono" id="Telefono" value="{{ isset($empleado->Telefono) ? $empleado->Telefono:'' }}" required>
</br>


<label for="id_Empresa">{{'Empresa'}}</label>

@if(isset($empleado))
    <select name="id_Empresa" id="id_Empresa">

        @foreach ($empresas as $empresa)
            <option value="{{$empresa->id}}" 
                @if($empresa->id == $empleado->id_Empresa) 
                    selected="selected" 
                @endif >{{$empresa->Name}}
            </option>
        @endforeach
    
    </select>
@else

    <select name="id_Empresa" id="id_Empresa">
            
        @foreach ($empresas as $empresa)
            <option value="{{$empresa->id}}">{{$empresa->Name}}</option>
        @endforeach
        
    </select>

@endif


<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

<a href="{{ url('empresas') }}">Regresar</a>


