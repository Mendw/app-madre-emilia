<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CargosRequest extends Request
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
            'nombre'        => 'required',
            'descripcion'   => 'required',     
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'       => 'Es obligatorio colocar el nombre',
            'descripcion.required'  => 'Es obligatorio colocar la descripción',
        ];
    }
}
