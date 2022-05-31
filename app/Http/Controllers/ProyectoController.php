<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['proyectos']=Proyecto::paginate(5);
        return view('proyecto.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Creo un array para validar campos de formularios obligatorios 
        $campos=[
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Nombre'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:300',
        ];

        $mensaje=[
            'required'=>'El :attribute es obligatorio',
            'Foto.required'=>'La Imagen es obligatorio',
        ];

        $this->validate($request, $campos, $mensaje);


        $datosProyecto = request()->except('_token');
        if($request->hasFile('Foto')){
            $datosProyecto['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Proyecto::insert($datosProyecto);


        //return response()->json($datosProyecto);
        return redirect('proyecto')->with('mensaje', 'Proyecto agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proyecto=Proyecto::findOrFail($id);

        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validamos que los campos esta vacios 
        $campos=[
            
            'Nombre'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:300',
        ];
        //sacamos el mensaje de que los campos no pueden estar vacios 
        $mensaje=[
            'required'=>'El :attribute es obligatorio',
            
        ];

        //No necesariamente el usuario tiene que adjuntar de nuevo la fotografia 
        if($request->hasFile('Foto')){
            $campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=['Foto.required'=>'La Imagen es obligatorio',];
        }

        $this->validate($request, $campos, $mensaje);

        //
        $datosProyecto = request()->except(['_token', '_method']);

        if($request->hasFile('Foto')){
            $proyecto=Proyecto::findOrFail($id);
            Storage::delete('public/'.$proyecto->Foto);
            $datosProyecto['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Proyecto::where('id','=',$id)->update($datosProyecto);
        $proyecto=Proyecto::findOrFail($id);
        //return view('proyecto.edit', compact('proyecto'));

        return redirect('proyecto')->with('mensaje', 'Proyecto Modificado!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $proyecto=Proyecto::findOrFail($id);
        if(Storage::delete('public/'.$proyecto->Foto)){
            Proyecto::destroy($id);
        }

        
        return redirect('proyecto')->with('mensaje', 'Proyecto Borrado');
    }
}
