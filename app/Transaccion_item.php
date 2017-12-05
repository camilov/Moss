<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion_item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='transaccion_item';
    protected   $primaryKey='id_transaccion_item';
    public      $timestamps=false;

    protected $fillable = [
        'id_transaccion_item', 'transaccion_id', 'pedido_item_id','producto_id','cantidad','valor_unitario','iva','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function transaccion()
    {
        return $this->belongsTo('App\Transaccion','transaccion_id');
    }

    public function pedidoItem()
    {
        return $this->belongsTo('App\pedido_item','pedido_item_id');
    }

    public function producto()
    {
        return $this->belongsTo('App\Producto','producto_id');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }
}
