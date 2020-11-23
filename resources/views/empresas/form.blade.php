{{--  {{ $Modo=='crear' ? 'Agregar Nueva Empresa':'Modificar Empresa' }}  --}}
<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">{{'Nombre de la Compañia'}}</label>
            <input class="form-control" type="text" name="Name" id="Name" value="{{ isset($empresa->Name) ? $empresa->Name:'' }}" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Email">{{'Email compañia'}}</label>
            <input class="form-control"  type="email" name="Email" id="Email" value="{{ isset($empresa->Email) ? $empresa->Email:'' }}" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Website">{{'Web Site de la Compañia'}}</label>
            <input class="form-control" type="text" name="Website" id="Website" value="{{ isset($empresa->Website) ? $empresa->Website:'' }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Logo">{{'Logo Compañia '}}</label>
            @if(isset($empresa->Logo))
            <br/>
            <img src="{{ asset('storage').'/'.$empresa->Logo}}" alt="" width="100" heigth="100" required>
            <br/>
            @endif
            <input class="form-control-file" type="file" name="Logo" id="Logo" value="{{ isset($empresa->Logo) ? $empresa->Logo:'' }}" >
        </div>
    </div>

    <input style="margin: 20px" type="button" class="btn btn-info" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">


    <a href="{{ url('empresas') }}" style="margin: 20px" class="btn btn-info" >Regresar</a>

</div>
