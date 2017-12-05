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

}
