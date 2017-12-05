<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta_ingrediente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='receta_ingrediente';
    protected   $primaryKey='id_receta_ingrediente';
    public      $timestamps=false;

    protected $fillable = [
        'id_receta_ingrediente', 'interlocutor_id', 'receta_id','producto_id','cantidad','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
