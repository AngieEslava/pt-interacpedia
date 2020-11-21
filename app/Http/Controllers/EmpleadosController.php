<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=Empleados::paginate(10);
        $empleados = Empleados::select("Empleados.*","Empresas.Name")
        ->join("Empresas","Empresas.id","=","Empleados.id_Empresa")
        ->get();

        return view('empleados.index',['empleados'=>$empleados]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empresas = Empresas::all();
        return view('empleados.create', ['empresas'=>$empresas]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosEmpleado = request()->except('_token');
        Empleados::insert($datosEmpleado);
        return redirect('empleados')->with('Mensaje', 'Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empresas = Empresas::all();

        $empleado = Empleados::findOrFail($id);

        return view('empleados.edit', ['empresas'=>$empresas, "empleado"=>$empleado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpleado = request()->except(['_token','_method']);
        
        //subir foto del logo
       
        Empleados::where('id','=',$id)->update($datosEmpleado);

        return redirect('empleados')->with('Mensaje','Empleado Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empleados::destroy($id);

        return redirect('empleados')->with('Mensaje','Empleado Eliminada');
    }
}
