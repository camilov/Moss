<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='caja';
    protected   $primaryKey='id_caja';
    public      $timestamps=false;

    protected $fillable = [
        'id_caja', 'interlocutor_id', 'base','compras','ventas','caja','efectivo','servicio','fecha_apertura','hora_apertura','fecha_cierre','hora_cierre','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
