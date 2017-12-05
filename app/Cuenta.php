<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='cuenta';
    protected   $primaryKey='id_cuenta';
    public      $timestamps=false;

    protected $fillable = [
        'id_cuenta', 'interlocutor_cliente_id', 'interlocutor_owner_id','punto_atencion_id','ususario_mesero_id','servicio_incluidos','fecha_apertura','fecha_cierre','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}

