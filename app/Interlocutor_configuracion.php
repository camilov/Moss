<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interlocutor_configuracion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='fw_interlocutor_configuracion';
    protected   $primaryKey='id_interlocutor_configuracion';
    public      $timestamps=false;

    protected $fillable = [
        'id_interlocutor_configuracion', 'titulo_sitio', 'imagen_perfil','imagen_logo','marca_blanca','tema_id','interlocutor_id','default_option','facturacion_control','facturacion_intervalo','factura_contador','regimen','proceso_pedido_comanda','producto_imagen','pedido_zonas'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
