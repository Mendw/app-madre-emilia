<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class IngresosRequest extends Request
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
            'id_nna'            => 'required',
            'fecha'             => 'required', 
            'id_empleado'       => 'required', 
            'id_funcionario'    => 'required', 
            'motivo'            => 'required', 
        ];
    }

    public function messages()
    {
        return [
            'id_nna.required'               => 'Es obligatorio colocar el niño, niña o adolescente',
            'fecha.required'                => 'Es obligatorio colocar la fecha',
            'id_empleado.required'          => 'Es obligatorio colocar el empleado',
            'id_funcionario.required'       => 'Es obligatorio colocar el funcionario',
            'motivo.required'               => 'Es obligatorio colocar el motivo',
        ];
    }
}