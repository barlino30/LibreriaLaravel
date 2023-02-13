<?php

namespace App\Http\Controllers;

use App\principal;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('Home.Home');
    }

    public function Contactenos()
    {
        //
        return view('Contactenos.Contactenos');
    }

    public function Quienes()
    {
        //
        return view('Quienes.Quienes');
    }

    public function General()
    {
        //
        return view('General.General');
    }
    public function Infantiles()
    {
        //
        return view('Infantiles.Infantiles');
    }
    public function Ingles()
    {
        //
        return view('Ingles.Ingles');
    }
    public function Juveniles()
    {
        //
        return view('Juveniles.Juveniles');
    }
    public function Literatura()
    {
        //
        return view('Literatura.Literatura');
    }
    public function Profesionales()
    {
        //
        return view('Profesionales.Profesionales');
    }
    public function Textos()
    {
        //
        return view('TextosEscolares.TextosEscolares');
    }
    public function Almacen()
    {
        $Almacen=principal::all();
        return view('Almacen.Almacen', compact('Almacen'));
    }
    public function Buscador()
    {
        //
        return view('Buscador.Buscador');
    }
    public function VistaP()
    {
        //
        return view('VistaProducto.ViewProducto');
    }
    public function Tienda()
    {
        //
        return view('Tienda.Tienda');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Agregar.add');
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
        $request->validate([
            'Nombre'=>'required',
            'Autor'=>'required',
            'Sipnosis'=>'required',
            'Precio'=>'required',
            'Genero'=>'required',
            'Imagen'=>'required'
        ]);
        principal::create( $request->all());
        return view('Home.Home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function show(principal $principal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $items=principal::FindOrFail($id);
        return view('Agregar.edit',compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $other=request()-> except(['_token','_method']);
        principal::where('id','=',$id)->update($other);
        return view('Home.Home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function destroy($items)
    {
        //  
        principal::destroy($items);
        return view('Home.Home');
    }
}
