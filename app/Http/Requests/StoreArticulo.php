<?php

namespace Fraccion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticulo extends FormRequest
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
            'inputTitulo' => 'required|max:45',
            'inputEstado' => 'required|numeric|min:0',
            'inputDescripcion' => 'required|max:300',
            'inputCuerpo' => 'required',
            'inputCategoria' => 'required|numeric|min:1',
               
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
            'inputTitulo' => 'Título',
            'inputEstado' => 'Estado',
            'inputDescripcion' => 'Descripción',
            'inputCuerpo' => 'Cuerpo',
            'inputCategoria' => 'Categoría',
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
            'inputCategoria.min' => 'Debe seleccionar una categoria'
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
        $input=$this->all();
        unset($input['fichero_articulo']);
        $this->session()->put('input', $input);

    }
}
