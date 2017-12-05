<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='Receta';
    protected   $primaryKey='id_receta';
    public      $timestamps=false;

    protected $fillable = [
        'id_receta', 'nombre', 'descripcion','interlocutor_id','producto_id','estado_id'
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

    public function producto()
    {
        return $this->belongsTo('App\Producto','Producto_id');
    }

    public function Estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }

    public function recetaIngrediente()
    {
        return $this->hasMany('App\Receta_ingrediente');
    }

}
