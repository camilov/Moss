<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_categoria extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='producto_categoria';
    protected   $primaryKey='id_producto_categoria';
    public      $timestamps=false;

    protected $fillable = [
        'id_producto_categoria', 'producto_categoria_id', 'usuario_perfil_id','nombre','orden','estado_id','descripcion','descripcion','icon_id','usuario_id','marca_blanca'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
