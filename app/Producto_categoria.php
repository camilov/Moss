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
        'id_producto_categoria', 'producto_categoria_id', 'usuario_perfil_id','nombre','orden','estado_id','descripcion','icon_id','usuario_id','marca_blanca'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

     public function producto()
    {
        return $this->hasMany('App\Producto');
    }

     public function usuarioPerfil()
    {
        return $this->belongsTo('App\User_perfil','usuario_perfil_id');
    }

     public function estado()
    {
        return $this->belongsTo('App\Estado','Estado_id');
    }

     public function usuario()
    {
        return $this->belongsTo('App\User','usuario_id');
    }
}
