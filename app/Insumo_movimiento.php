<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo_movimiento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='insumo_movimiento';
    protected   $primaryKey='id_insumo_movimiento';
    public      $timestamps=false;

    protected $fillable = [
        'id_insumo_movimiento', 'insumo_movimiento_tipo_id', 'marca_blanca','transaccion_id','producto_id','insumo_id','cantidad','costo_individual','costo','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
