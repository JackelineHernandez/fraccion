<?php

namespace Fraccion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCaracteristicaTecnica extends FormRequest
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
            'producto_id' => 'required|numeric',
            'inputNombreCarTecnicaEdit' => 'required|max:45',
            'customRadioVisibleEdit' => 'required|in:true,false',
            'inputOrdenCarTecnicaEdit' => 'integer|min:1',
            'id' => 'required',
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
            'producto_id' => 'Producto',
            'inputNombreCarTecnicaEdit' => 'Nombre',
            'customRadioVisibleEdit' => 'Visibilidad',
            'inputOrdenCarTecnicaEdit' => 'Orden'
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
        //dd($this);
        $this->session()->put('editCaracteristica', "true");
        $this->session()->put('editCaracteristicaId', $this->id);
    }
}
