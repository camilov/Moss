<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad_medida extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='unidad_medida';
    protected   $primaryKey='id_unidad_medida';
    public      $timestamps=false;

    protected $fillable = [
        'id_unidad_medida', 'nombre', 'sigla','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
