<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interlocutor_condicion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='fw_interlocutor_condicion';
    protected   $primaryKey='id_interlocutor_condicion';
    public      $timestamps=false;

    protected $fillable = [
        'id_interlocutor_condicion', 'interlocutor_id', 'tema_id','titulo_sitio','imagen_perfil','imagen_logo','marca_blanca'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'fuente_id'
    ];
}
