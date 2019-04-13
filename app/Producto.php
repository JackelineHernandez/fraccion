<?php

namespace Fraccion;

use Illuminate\Database\Eloquent\Model;

use Fraccion\Constantes\FillableColumns;
use Fraccion\CaracteristicasFinanciera;
use Fraccion\Contenido;
use Fraccion\ContenidoProducto;
use Fraccion\Estado;
use Fraccion\CaracteristicasTecnica;
use Fraccion\ProductoMap;


class Producto extends Model
{
  public $timestamps = false;


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = FillableColumns::PRODUCTO;

  /**
     * The accessors to append to the model's array form.
     *  ['starRating']
     * @var array
     */
    protected $appends =  ['tiempoInversion', 'primeraImagen'];

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
   * Set the fecha_inicio.
   *
   * @param  string  $value
   * @return void
   */
  public function setFechaInicioAttribute($value)
  {
      $this->attributes['fecha_inicio'] = strtotime($value);
  }

  public function getFechaInicioAttribute($value){
        return date('Y-m-d',$value);
  }
  /**
   * Set the fecha_vencimiento.
   *
   * @param  string  $value
   * @return void
   */
  public function setFechaVencimientoAttribute($value)
  {
      $this->attributes['fecha_vencimiento'] = strtotime($value);
  }

  public function getFechaVencimientoAttribute($value){
        return date('Y-m-d',$value);
  }

  /**
     * Get the Star Rating Hotel.
     *
     * @return integer
     */
    public function getTiempoInversionAttribute()
    {
        $plazo = $this->caracteristicasFinancieras->plazo_meses;
        $p=round($plazo/3);
        $primero=strtotime($this->fecha_inicio);

        $today = date('Y-m-d');
        $today=date('Y-m-d', strtotime($today));
        
        $mesmas = date("Y-m-d", strtotime("+".$p." month", $primero));
        
        if($today<$mesmas){
            return "temprana";
        }
        
        $p2= $p * 2;
        $mesmas2 = date("Y-m-d", strtotime("+".$p2." month", $primero));

        if($today>$mesmas && $today<$mesmas2)
            return "normal";
        else{
            return "cierre";
        }
        
        /*$p3= $p * 2;
        $mesmas3 = date("Y-m-d", strtotime("+".$p3." month", $primero));

        if($today>$mesmas && $today<$mesmas2)
            return "cierre";*/
    }

    public function getCaracteristicasTecnicasVisibleAttribute(){
        return $this->caracteristicasTecnicas()
                                ->where("visible", 1)
                                ->get();
    }

    /**
    * Get the estado.
    *
    * @param  string  $value
    * @return void
    */
    public function getPrimeraImagenAttribute($value){
        foreach($this->contenidos as $contenido){
            if($contenido->tipo_contenidos_id==1)
                return $contenido;
        }
        $contenidoDefault = new Contenido();
        $contenidoDefault->ubicacion="images/proyectos/1.png";
        $contenidoDefault->nombre_archivo="1.png";
        $contenidoDefault->tipo_contenidos_id=1;
        return $contenidoDefault;
    }

  /**
   * Get the contenidos for the producto.
   */
  public function contenidos()
  {
      return $this->belongsToMany(Contenido::Class)->using(ContenidoProducto::Class);
  }

  /**
   * Get the estado for the proyecto.
   */
  public function estado()
  {
      return $this->belongsTo(Estado::Class, 'estados_id');
  }
  
  /**
   * Get the caracteristicas_financieras for the proyecto.
   */
  public function caracteristicasFinancieras()
  {
      //return $this->belongsTo(CaracteristicasFinanciera::Class, 'caracteristicas_financieras_id');
      return $this->hasOne(CaracteristicasFinanciera::Class);
  }

  /**
   * Get the caracteristicas_tecnicas for the proyecto.
   */
  public function caracteristicasTecnicas()
  {
      //return $this->belongsTo(CaracteristicasFinanciera::Class, 'caracteristicas_financieras_id');
      return $this->hasMany(CaracteristicasTecnica::Class)
                    ->orderBy("orden", "asc");
  }

  /**
   * Get the maps for the proyecto.
   */
  public function productoMap()
  {
      //return $this->belongsTo(CaracteristicasFinanciera::Class, 'caracteristicas_financieras_id');
      return $this->hasOne(ProductoMap::Class);
  }

}
