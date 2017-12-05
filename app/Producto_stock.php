<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_stock extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='producto_stock';
    protected   $primaryKey='id_producto_stock';
    public      $timestamps=false;

    protected $fillable = [
        'id_producto_stock', 'producto_id', 'stock','stock_minimo','stock_maximo'
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
        return $this->belongsTo('App\Producto','producto_id');
    }
}
