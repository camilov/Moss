<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion_pago_medio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected   $table='transaccion_pago_medio';
    protected   $primaryKey='id_transaccion_pago_medio';
    public      $timestamps=false;

    protected $fillable = [
        'id_transaccion_pago_medio', 'nombre','estado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function transaccion()
    {
        return $this->hasmany('App\Transaccion');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }
}
