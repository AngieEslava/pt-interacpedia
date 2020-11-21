{{ $Modo=='crear' ? 'Agregar Nueva Empresa':'Modificar Empresa' }}

<label for="Name">{{'Nombre de la Compañia'}}</label>
<input type="text" name="Name" id="Name" value="{{ isset($empresa->Name) ? $empresa->Name:'' }}" required>
</br>

<label for="Email">{{'Email compañia'}}</label>
<input type="email" name="Email" id="Email" value="{{ isset($empresa->Email) ? $empresa->Email:'' }}" required>
</br>

<label for="Logo">{{'Logo Compañia '}}</label>
@if(isset($empresa->Logo))
<br/>
<img src="{{ asset('storage').'/'.$empresa->Logo}}" alt="" width="100" heigth="100" required>
<br/>
@endif
<input type="file" name="Logo" id="Logo" value="{{ isset($empresa->Logo) ? $empresa->Logo:'' }}" >
</br>

<label for="Website">{{'Web Site de la Compañia'}}</label>
<input type="text" name="Website" id="Website" value="{{ isset($empresa->Website) ? $empresa->Website:'' }}" required>
</br>

<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

<a href="{{ url('empresas') }}">Regresar</a>


