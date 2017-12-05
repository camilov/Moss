<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='mesa';
    protected   $primaryKey='id_mesa';
    public      $timestamps=false;

    protected $fillable = [
        'id_mesa', 'mesa_id', 'nombre','descripcion','estado_id','mesero_id','orden','interlocutor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

     public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }

     public function interlocutor()
    {
        return $this->belongsto('App\Interlocutor','interlocutor_id');
    }

    public function pedido()
    {
        return $this->hasMany('App\Pedido');
    }
}
