<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='observacion';
    protected   $primaryKey='id_observacion';
    public      $timestamps=false;

    protected $fillable = [
        'id_observacion', 'nombre', 'orden','estado_id','interlocutor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
