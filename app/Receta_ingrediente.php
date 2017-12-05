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

    public function interlocutor()
    {
        return $this->belongsTo('App\Interlocutor','interlocutor_id');
    }

    public function receta()
    {
        return $this->belongsTo('App\Receta','receta_id');
    }

    public function producto()
    {
        return $this->belongsTo('App\producto','producto_id');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado','Estado_id');
    }
}
