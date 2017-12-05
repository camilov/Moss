<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='fw_log';
    protected   $primaryKey='id_log';
    public      $timestamps=false;

    protected $fillable = [
        'id_log', 'tipo_log_id', 'ususario_id','comentario','descripcion','fecha','ip'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
