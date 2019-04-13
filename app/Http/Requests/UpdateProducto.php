<?php

namespace Fraccion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProducto extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inputNombre' => 'required|max:45',
            'inputEstadoSelect' => 'required|numeric|min:1',
            'inputDescripcion' => 'required',
            'inputFechaInicio' => 'required|date|before:inputFechaVencimiento',
            'inputFechaVencimiento' => 'required|date',
            'inputInversionMax' => 'required|numeric',
            'inputInversionMin' => 'required|numeric',
            'inputInversionistasMax' => 'required|numeric',
            'inputInversionistasMin' => 'required|numeric',
            'inputRentabilidadAnual' => 'required|numeric',
            'inputRentabilidadMensual' => 'required|numeric',
            'inputPlazoMeses' => 'required|numeric',
            'inputObjetivoFinanciacion' => 'required|numeric',
            'inputBeneficioOperacion' => 'required|numeric',
            'inputDireccion' => 'required',
            'inputLatitud' => 'required|numeric',
            'inputLongitud' => 'required|numeric',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'inputNombre' => 'Nombre',
            'inputEstadoSelect' => 'Estado',
            'inputDescripcion' => 'Descripcion',
            'inputFechaInicio' => 'Fecha de Inicio',
            'inputFechaVencimiento' => 'Fecha de Vencimiento',
            'inputInversionMax' => 'Inversión Máxima',
            'inputInversionMin' => 'Inversión Mínima',
            'inputInversionistasMax' => 'Máximo de Inversionistas',
            'inputInversionistasMin' => 'Mínimo de Inversionistas',
            'inputRentabilidadAnual' => 'Rentabilidad Anual',
            'inputRentabilidadMensual' => 'Rentabilidad Mensual',
            'inputPlazoMeses' => 'Plazo en Meses',
            'inputObjetivoFinanciacion' => 'Objetivo de Finaciación',
            'inputBeneficioOperacion' => 'Beneficio de Operación',
            'inputDireccion' => 'Dirección',
            'inputLatitud' => 'Latitud',
            'inputLongitud' => 'Longitud',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'inputEstadoSelect.min' => 'Debe seleccionar un estado'
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->inputInversionMax <= $this->inputInversionMin) {
                $validator->errors()->add('inputInversionMax', 'El monto de Inversión Máxima debe ser mayor que el monto de Inversión Mínima');
            }
            if ($this->inputInversionistasMax <= $this->inputInversionistasMin) {
                $validator->errors()->add('inputInversionMax', 'La cantidad de Inversionistas Maximos debe ser mayor que la cantidad de Inversionistas Minimos');
            }
            if ($this->inputRentabilidadAnual <= $this->inputRentabilidadMensual) {
                $validator->errors()->add('inputRentabilidadAnual', 'El monto de Rentabilidad Anual debe ser mayor que el monto de Rentablidad Mensual');
            }
        });

        $input=$this->all();
        unset($input['fichero_producto']);
        $this->session()->forget('input');
        //dd($input);
        $this->session()->put('input', $input);


    }
}
