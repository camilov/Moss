<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion_tipo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='transaccion_tipo';
    protected   $primaryKey='id_transaccion_tipo';
    public      $timestamps=false;

    protected $fillable = [
        'id_transaccion_tipo', 'nombre', 'descripcion','movimiento_tipo_id','estado_id','orden'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
