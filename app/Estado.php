<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='fw_estado';
    protected   $primaryKey='id_estado';
    public      $timestamps=false;

    protected $fillable = [
        'id_estado', 'interlocutor_id', 'nombre','descripcion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
