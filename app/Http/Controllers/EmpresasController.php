<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //
        $datos['empresas']=Empresas::paginate(10);
        return view('empresas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosEmpresa = request()->all();
        // Agregando una empresa 
        $datosEmpresa = request()->except('_token');

        if($request->hasFile('Logo')){
            $datosEmpresa['Logo']=$request->file('Logo')->store('uploads','public');
        }

        Empresas::insert($datosEmpresa);
        //Agregando una empresa


        //return response()->json($datosEmpresa);
        return redirect('empresas')->with('Mensaje', 'Empresa agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show(Empresas $empresas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empresa = Empresas::findOrFail($id);

        return view('empresas.edit', compact('empresa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpresa = request()->except(['_token','_method']);
        
        //subir foto del logo
        if($request->hasFile('Logo')){

            $empresa = Empresas::findOrFail($id);
        
            Storage::delete('public/'.$empresa->Logo);

            $datosEmpresa['Logo']=$request->file('Logo')->store('uploads','public');
        } 
        
        Empresas::where('id','=',$id)->update($datosEmpresa);

        //$empresa = Empresas::findOrFail($id);
        //return view('empresas.edit', compact('empresa'));
        
        return redirect('empresas')->with('Mensaje','Empresa Modificada con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empresa = Empresas::findOrFail($id);
        
        if( Storage::delete('public/'.$empresa->Logo)){
            Empresas::destroy($id);
        }

        return redirect('empresas')->with('Mensaje','Empresa Eliminada');

    }
}
