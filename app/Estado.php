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


     public function caja()
    {
        return $this->hasMany('App\Caja');
    }

    public function interlocutor(){

        return $this->hasmany('App\Interlocutor');
    }

     public function descuento()
    {
        return $this->hasMany('App\Descuento');
    }

    public function interlocutorClase(){
        return $this->hasmany('App\Interlocutor_clase');

    }


     public function tipoNegocio()
    {
        return $this->hasMany('App\Interlocutor_tipo_negocio');
    }

     public function logTipo()
    {
        return $this->hasMany('App\Log_tipo');
    }


     public function mesa()
    {
        return $this->hasMany('App\Mesa');
    }

     public function observacion()
    {
        return $this->hasMany('App\Observacion');
    }

     public function pedido()
    {
        return $this->hasMany('App\Pedido');
    }

     public function pedidoItem()
    {
        return $this->hasMany('App\Pedido_item');
    }

     public function producto()
    {
        return $this->hasMany('App\Producto');
    }

     public function productoCategoria()
    {
        return $this->hasMany('App\Producto_categoria');
    }

     public function productoCategoriaTipo()
    {
        return $this->hasMany('App\Producto_categoria_tipo');
    }

     public function productoTipo()
    {
        return $this->hasMany('App\Producto_tipo');
    }

    public function Receta()
    {
        return $this->hasMany('App\Receta');
    }

    public function recetaIngrediente()
    {
        return $this->hasMany('App\Receta_ingrediente');
    }
}
