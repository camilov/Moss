<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='producto';
    protected   $primaryKey='id_producto';
    public      $timestamps=false

    protected $fillable = [
        'id_producto', 'referencia', 'barcode','nombre','nombre_corto','producto_categoria_id','producto_tipo_id','iva','iva_incluido','costo','precio','imagen','descripcion','unidad_medida_id','stock_control','estante','orden','estado_id','interlocutor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
