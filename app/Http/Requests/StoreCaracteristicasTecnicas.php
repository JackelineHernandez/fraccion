<?php

namespace Fraccion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCaracteristicasTecnicas extends FormRequest
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
            'inputNombreCarTecnica' => 'required|max:45',
            'customRadioVisible' => 'required|in:true,false',
            'inputOrdenCarTecnica' => 'integer|min:1',
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
            'inputNombreCarTecnica' => 'Nombre',
            'customRadioVisible' => 'Visibilidad',
            'inputOrdenCarTecnica' => 'Orden'
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
        $this->session()->forget('editCaracteristica');
        $this->session()->forget('editCaracteristicaId');
        $input=$this->all();
        unset($input['fichero_caracteristica']);
        $this->session()->put('input', $input);
        //dd($input);
    }

}
