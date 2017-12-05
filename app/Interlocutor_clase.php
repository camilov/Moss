<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interlocutor_clase extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='fw_interlocutor_clase';
    protected   $primaryKey='id_interlocutor_clase';
    public      $timestamps=false;

    protected $fillable = [
        'id_interlocutor_clase', 'nombre', 'estado_id'
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
        return $this->hasmany('App\Interlocutor');
    }

     public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }
}
