<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log_tipo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='fw_usuario_perfil';
    protected   $primaryKey='id_usuario_perfil';
    public      $timestamps=false;

    protected $fillable = [
        'id_usuario_perfil','nombre','estado_id','marca_blanca'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
