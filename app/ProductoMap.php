<?php

namespace Fraccion;

use Illuminate\Database\Eloquent\Model;

class ProductoMap extends Model
{
    public $timestamps = false;

     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Set the marca_tiempo_actualizacion.
    *
    * @param  string  $value
    * @return void
    */
    public function setMarcaTiempoActualizacionAttribute($value)
    {
        $this->attributes['marca_tiempo_actualizacion'] = strtotime($value);
    }

    public function getMarcaTiempoActualizacionAttribute($value){
        return date('Y-m-d h:m:s',$value);
    }
}
