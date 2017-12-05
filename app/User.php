<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='fw_usuario';
    protected   $primaryKey='id_usuario';
    public      $timestamps=false;

    protected $fillable = [
        'id_usuario', 'interlocutor_id', 'nickname','nombre','apellido','num_documento','email','usuario_perfil_id','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'clave'
    ];

     public function interlocutor()
    {
        return $this->belongsTo('App\Interlocutor','interlocutor_id');
    }

     public function log()
    {
        return $this->hasMany('App\Log');
    }

     public function productoCategoria()
    {
        return $this->hasMany('App\Producto_categoria');
    }
}
