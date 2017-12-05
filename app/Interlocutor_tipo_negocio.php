<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interlocutor_tipo_negocio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='fw_interlocutor_tipo_negocio';
    protected   $primaryKey='id_interlcutor_tipo_negocio';
    public      $timestamps=false;

    protected $fillable = [
        'id_interlocutor_tipo_negocio', 'nombre', 'descripcion','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array 
     */
    protected $hidden = [
        
    ];
     public function interlocutor()
    {
        return $this->hasMany('App\Interlocutor');
    }

     public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }
}
