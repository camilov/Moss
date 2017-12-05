<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interlocutor extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='fw_interlocutor';
    protected   $primaryKey='id_interlocutor';
    public      $timestamps=false;

    protected $fillable = [
        'id_interlocutor', 'interlocutor_id', 'nombre','apellido','interlocutor_clase_id','tipo_documento','num_documento','direccion','celular','telefono','estado_id','orden','descripcion','interlocutor_tipo_negocio_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
