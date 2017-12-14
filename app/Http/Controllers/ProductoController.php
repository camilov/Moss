<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Insumo_movimiento;
use App\Pedido_item;
use App\Producto_categoria;
use App\Producto_tipo;
use App\Unidad_medida;
use App\Estado;
use App\Interlocutor;
use App\Producto_stock;
use App\Receta;
use App\Receta_ingrediente;
use App\Transaccion_item;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::orderBy('id_producto','ASC')->paginate(5);

         
       
        $producto->each(function($producto){
            $producto->categoria;
            $producto->estado;
        });


        return view('fw.productos.index')->with('producto',$producto);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $categoria = Producto_categoria::select('nombre','id_producto_categoria')->pluck('nombre','id_producto_categoria');
        $iva = Producto::select('iva_incluido','id_producto')->pluck('iva_incluido','id_producto');
        $stock = Producto::select('stock_control')->pluck('stock_control');
        return view('fw.productos.create')->with('categoria',$categoria)
                                          ->with('iva',$iva)
                                          ->with('stock',$stock);
                                  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto=new Producto($request->all());
        $producto->save();
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
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
     * @param  \App\Producto  $product
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
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receta = Receta::findOrFail($id);
        $receta->delete();
        return redirect()->route('recetas.index');
    }
}
