<?php

namespace App\Http\Controllers;

use App\Receta;
use App\Interlocutor;
use App\Producto;
use App\Estado;
use Illuminate\Http\Request;
use App\http\controllers\controller;


class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receta = Receta::orderBy('id_receta','ASC')->paginate(5);

         
       
        $receta->each(function($receta){
            $receta->interlocutor;
            $receta->producto;
            $receta->estado;
        });


        return view('fw.recetas.index')->with('receta',$receta);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = Producto::select('nombre','id_producto')->pluck('nombre','id_producto');
        $estado = Estado::select('descripcion','id_estado')->pluck('descripcion','id_estado');
        return view('fw.recetas.create')->with('producto',$producto)
                                  ->with('estado',$estado);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receta=new Receta($request->all());
        $receta->save();
        return redirect()->route('recetas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receta = Receta::findOrFail($id);
        $producto = Producto::select('nombre','id_producto')->pluck('nombre','id_producto');
        $estado = Estado::select('descripcion','id_estado')->pluck('descripcion','id_estado');
        return view('fw.recetas.edit')->with('receta',$receta)
                                      ->with('producto',$producto)
                                      ->with('estado',$estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $receta=Receta::findOrFail($id);
        $receta->nombre =$request->nombre;
        $receta->descripcion =$request->descripcion;
        $receta->save();
        return redirect()->route('recetas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receta = Receta::findOrFail($id);
        $receta->delete();
        return redirect()->route('recetas.index');
        
    }
}
