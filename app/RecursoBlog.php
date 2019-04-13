<?php

namespace Fraccion;

use Illuminate\Database\Eloquent\Model;

class RecursoBlog extends Model
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
    public function setFechaCreacionAttribute($value)
    {
        $this->attributes['fecha_creacion'] = strtotime($value);
    }
 
    public function getFechaCreacionAttribute($value){
          return date('Y-m-d',$value);
    }
}
