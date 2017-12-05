<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='producto';
    protected   $primaryKey='id_producto';
    public      $timestamps=false

    protected $fillable = [
        'id_producto', 'referencia', 'barcode','nombre','nombre_corto','producto_categoria_id','producto_tipo_id','iva','iva_incluido','costo','precio','imagen','descripcion','unidad_medida_id','stock_control','estante','orden','estado_id','interlocutor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

     public function insumoMovimiento()
    {
        return $this->hasMany('App\Insumo_movimiento');
    }

     public function pedidoItem()
    {
        return $this->hasMany('App\Pedido_item');
    }

     public function guia()
    {
        return $this->hasMany('sisVentas\Guia');
    }

     public function categoria()
    {
        return $this->belongsTo('App\Producto_categoria','producto_categoria_id');
    }

     public function tipo()
    {
        return $this->belongsTo('App\Producto_tipo','producto_tipo_id');
    }

     public function medida()
    {
        return $this->belongsTo('App\Unidad_medida','unidad_medida_id');
    }

     public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }

     public function interlocutor()
    {
        return $this->belongsTo('App\Interlocutor','interlocutor_id');
    }

     public function productoStock()
    {
        return $this->hasMany('App\Producto_stock');
    }

    public function Receta()
    {
        return $this->hasMany('App\Receta');
    }

    public function receraIngrediente()
    {
        return $this->hasmany('App\RecetaIngrediente');
    }
}
