<?php

namespace Fraccion;

use Illuminate\Database\Eloquent\Model;
use Fraccion\Contenido;
use Fraccion\Producto;

class CaracteristicasTecnica extends Model
{
  public $timestamps = false;

  /**
   * The attributes that aren't mass assignable.
   *
   * @var array
   */
   protected $guarded = [];

   /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        "visible" => "boolean"
    ];

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
    * Get the contenidos for the producto.
    */
   public function contenidos()
   {
       return $this->belongsToMany(Contenido::Class,"caracteristicas_contenidos");
   }
   /**
    * Get the contenidos for the producto.
    */
   public function producto()
   {
       return $this->belongsTo(Producto::Class, 'producto_id');
   }
}
