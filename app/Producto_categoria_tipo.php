<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_categoria_tipo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='producto_categoria_tipo';
    protected   $primaryKey='id_producto_categoria_tipo';
    public      $timestamps=false;

    protected $fillable = [
        'id_producto_categoria_tipo', 'nombre','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
