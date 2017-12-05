<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='descuento';
    protected   $primaryKey='id_descuento';
    public      $timestamps=false;

    protected $fillable = [
        'id_descuento', 'interlocutor_id', 'descuento','nombre','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
