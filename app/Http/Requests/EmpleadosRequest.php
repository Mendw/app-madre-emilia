<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmpleadosRequest extends Request
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
            'cedula'            => 'required|unique:Empleados,cedula,'.$this->id.',id',
            'nombre'            => 'required',     
            'apellido'          => 'required',
            'fecha_nacimiento'  => 'required',     
            'lugar_nacimiento'  => 'required',
            'direccion'         => 'required',     
            'telefono'          => 'required',
            'id_cargo'          => 'required',     
        ];
    }

    public function messages()
    {
        return [
            'cedula.required'           => 'Es obligatorio colocar la cédula',
            'nombre.required'           => 'Es obligatorio colocar el nombre',
            'apellido.required'         => 'Es obligatorio colocar el apellido',
            'fecha_nacimiento.required' => 'Es obligatorio colocar la fecha de nacimiento',
            'lugar_nacimiento.required' => 'Es obligatorio colocar el lugar de nacimiento',
            'direccion.required'        => 'Es obligatorio colocar la dirección',
            'telefono.required'         => 'Es obligatorio colocar el teléfono',
            'id_cargo.required'         => 'Es obligatorio especificar el cargo',

            'cedula.unique'             => 'Ya existe un empleado registrado con ese número de cédula',
        ];
    }
}
