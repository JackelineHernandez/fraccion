<?php

namespace Fraccion;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
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

    /**
     * Set the fecha_nacimiento.
     *
     * @param  string  $value
     * @return void
     */
    public function setFechaNacimientoAttribute($value)
    {
        $this->attributes['fecha_nacimiento'] = strtotime($value);
    }

    public function getFechaNacimientoAttribute($value){
            return date('Y-m-d',$value);
    }

}
