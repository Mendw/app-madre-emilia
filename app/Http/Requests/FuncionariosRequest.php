<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FuncionariosRequest extends Request
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
            'cedula'            => 'required',
            'nombre'            => 'required',
            'apellido'          => 'required', 
            'telefono'          => 'required', 
            'cargo'             => 'required',
            'detalle_organismo' => 'required', 
            'id_organismo'      => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cedula.required'               => 'Es obligatorio colocar la cédula',
            'nombre.required'               => 'Es obligatorio colocar el nombre',
            'apellido.required'             => 'Es obligatorio colocar el apellido',
            'telefono.required'             => 'Es obligatorio colocar el teléfono',
            'cargo.required'                => 'Es obligatorio colocar el cargo',
            'detalle_organismo.required'    => 'Es obligatorio colocar el detalle del organismo',
            'id_organismo.required'         => 'Es obligatorio colocar el organismo',
        ];
    }
}