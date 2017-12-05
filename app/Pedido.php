<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='pedido';
    protected   $primaryKey='id_pedido';
    public      $timestamps=false;

    protected $fillable = [
        'id_pedido', 'cuenta_id', 'mesero_id','mesa_id','estado_id','fecha_publicacion','fecha_despachado','tiempo_despacho','interlocutor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function interlocutor()
    {
        return $this->belongsTo('App\Interlocutor','interlocutor_id');
    }

     public function mesa()
    {
        return $this->belongsTo('App\Mesa','mesa_id');
    }

     public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }


     public function cuenta()
    {
        return $this->belongsTo('App\Cuenta','cuenta_id');
    }

     public function pedidoItem()
    {
        return $this->hasMany('App\Pedido_item');
    }
}
