<?php

namespace Fraccion\Constantes;

class FillableColumns
{
    const PRODUCTO = [
        'nombre',
        'descripcion',
        'fecha_vencimiento',
        'fecha_inicio',
        'maxima_inversion',
        'minima_inversion',
        'maximo_inversionistas',
        'minimo_inversionistas',
        'estados_id',
        'aliados_id',
        'usuarios_id',
        'marca_tiempo_actualizacion',
        'caracteristicas_financieras_id'];

    const CARACTERISTICAS_FINANCIERAS= [
        'rentabilidad_anual',
        'rentabilidad_mensual',
        'plazo_meses',
        'objetivo_financiacion',
        'beneficio_operacion',
        'usuarios_id',
        'marca_tiempo_actualizacion',];
}
