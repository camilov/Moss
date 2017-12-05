<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='transaccion';
    protected   $primaryKey='id_transaccion';
    public      $timestamps=false;

    protected $fillable = [
        'id_transaccion', 'cuenta_id', 'factura_numero','transaccion_tipo_id','responsable_id','interlocutor_id','interlocutor_externo','observacion','subtotal','servicio','impuesto','descuento','descuento_porcentaje','total','transaccion_pago_medio_id','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'fecha'
    ];

    public function insumoMovimento()
    {
        return $this->hasMany('App\Insumo_movimiento');
    }

    public function cuenta()
    {
        return $this->belongsTo('App\Cuenta','cuenta_id');
    }

    public function transaccionTipo()
    {
        return $this->belongsTo('App\Transaccion_tipo','transaccion_tipo_id');
    }

    public function interlocutor()
    {
        return $this->belongsTo('App\Interlocutor','interlocutor_id');
    }

    public function transaccionPagoMedio()
    {
        return $this->belongsTo('App\Transaccion_pago_medio','transaccion_pago_medio_id');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }

    public function transaccionItem()
    {
        return $this->hasMany('App\Transaccion_item');
    }

}
