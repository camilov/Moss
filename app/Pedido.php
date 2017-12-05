<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='pedido';
    protected   $primaryKey='id_pedido';
    public      $timestamps=false;

    protected $fillable = [
        'id_pedido', 'cuenta_id', 'mesero_id','mesa_id','estado_id','fecha_publicacion','fecha_despachado','tiempo_despacho','interlocutor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
