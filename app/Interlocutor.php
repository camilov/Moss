<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interlocutor extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='fw_interlocutor';
    protected   $primaryKey='id_interlocutor';
    public      $timestamps=false;

    protected $fillable = [
        'id_interlocutor', 'interlocutor_id', 'nombre','apellido','interlocutor_clase_id','tipo_documento','num_documento','direccion','celular','telefono','estado_id','orden','descripcion','interlocutor_tipo_negocio_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

     public function usuario()
    {
        return $this->hasMany('App\User');
    }

    public function clase(){

        return $this->belongsTo('App\Interlocutor_clase','interlocutor_clase_id');
    }

    public function tipoNegocio(){

        return $this->belongsTo('App\Interlocutor_tipo_negocio','interlocutor_tipo_negocio_id');
    }

    public function pedido(){

        return $this->hasmany('App\Pedido');
    }


    public function caja(){

        return $this->hasmany('App\Caja');
    }

     public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }

     public function descuento()
    {
        return $this->hasMany('App\Descuento');
    }

    public function observacion(){

        return $this->hasMany('App\Observacion');
    }

     public function producto()
    {
        return $this->hasMany('App\Producto');
    }


    public function receta()
    {
        return $this->hasMany('App\Receta');
    }

    public function recetaIngrediente()
    {
        return $this->hasmany('App\Receta');
    }

    public function transaccion()
    {
        return $this->hasmany('App\Transaccion');
    }

}
