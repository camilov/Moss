<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido_item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='pedido_item';
    protected   $primaryKey='id_pedido_item';
    public      $timestamps=false;

    protected $fillable = [
        'id_pedido_item', 'pedido_id', 'producto_id','cantidad','observacion_id','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
