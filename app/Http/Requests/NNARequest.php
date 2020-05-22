<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NNARequest extends Request
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
            'cedula'                        => 'required',
            'nombre'                        => 'required',
            'apellido'                      => 'required',
            'fecha_nacimiento'              => 'required',
            'lugar_nacimiento'              => 'required',
            'id_medida'                     => 'required',
            'numero_medida'                 => 'required', 
            'expediente'                    => 'required', 
            'fecha_medida'                  => 'required',
            'id_grado'                      => 'required', 
            'id_escolaridad'                => 'required',
            'tipo_sangre'                   => 'required',
            'id_estado'                     => 'required',
            'talla'                         => 'required',
            'peso'                          => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cedula.required'               => 'Es obligatorio colocar la cédula',
            'nombre.required'               => 'Es obligatorio colocar el nombre',
            'apellido.required'             => 'Es obligatorio colocar el apellido',
            'fecha_nacimiento.required'     => 'Es obligatorio colocar la fecha de nacimiento',
            'lugar_nacimiento.required'     => 'Es obligatorio colocar el lugar de nacimiento',
            'id_medida.required'            => 'Es obligatorio colocar la medida de protección',
            'numero_medida.required'        => 'Es obligatorio colocar el número de la medida',
            'expediente.required'           => 'Es obligatorio colocar el expediente',
            'fecha_medida.required'         => 'Es obligatorio colocar la fecha de la medida',
            'id_grado.required'             => 'Es obligatorio colocar el grado de instrucción',
            'id_escolaridad.required'       => 'Es obligatorio colocar la escolaridad',
            'tipo_sangre.required'          => 'Es obligatorio colocar el tipo de sangre',
            'id_estado.required'            => 'Es obligatorio colocar el estado',
            'talla.required'                => 'Es obligatorio colocar la talla',
            'peso.required'                 => 'Es obligatorio colocar el peso',
        ];
    }
}