<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido_item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='pedido_item';
    protected   $primaryKey='id_pedido_item';
    public      $timestamps=false;

    protected $fillable = [
        'id_pedido_item', 'pedido_id', 'producto_id','cantidad','observacion_id','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

     public function pedido()
    {
        return $this->belongsTo('App\Pedido','pedido_id');
    }

     public function producto()
    {
        return $this->belongsTo('App\Producto','producto_id');
    }

     public function observacion()
    {
        return $this->belongsTo('App\Observacion');
    }

     public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }

    public function transaccionItem()
    {
        return $this->hasMany('App\Transaccion_item';
    }
}
