<?php

namespace Fraccion;

use Illuminate\Database\Eloquent\Model;
use Fraccion\RecursoBlog;
use Fraccion\CategoriaBlog;

class Articulo extends Model
{
    public $timestamps = false;

  /**
   * The attributes that aren't mass assignable.
   *
   * @var array
   */
   protected $guarded = [];

   /**
     * The accessors to append to the model's array form.
     *  ['starRating']
     * @var array
     */
    protected $appends =  ['primeraImagen'];


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
          return date('d/m/Y',$value);
    }
    
    /**
    * Get the estado.
    *
    * @param  string  $value
    * @return void
    */
    public function getEstadoAttribute($value){
        $estado=$value==1 ? "Activo" : "Inactivo";   
        return $estado;
    }

    /**
    * Get the estado.
    *
    * @param  string  $value
    * @return void
    */
    public function getPrimeraImagenAttribute($value){
        foreach($this->recursos as $recurso){
            if($recurso->tipo_recurso_id==1)
                return $recurso;
        }
        $recursoDefault = new RecursoBlog();
        $recursoDefault->ruta="images/blog/noticia1.png";
        $recursoDefault->nombre="noticia1.png";
        $recursoDefault->tipo_recurso_id=1;
        return $recursoDefault;
    }

    /**
     * Get the caracteristicas_tecnicas for the proyecto.
     */
    public function recursos()
    {
        return $this->hasMany(RecursoBlog::Class)
                        ->orderBy("posicion", "asc");
    }

    /**
     * Get the caracteristicas_financieras for the proyecto.
     */
    public function categoriaBlog()
    {
        return $this->belongsTo(CategoriaBlog::Class);
    }
 
}
