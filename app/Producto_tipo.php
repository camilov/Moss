<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_tipo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='producto_tipo';
    protected   $primaryKey='id_producto_tipo';
    public      $timestamps=false;

    protected $fillable = [
        'id_producto_tipo', 'nombre','estado_id'
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

     public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }
}
