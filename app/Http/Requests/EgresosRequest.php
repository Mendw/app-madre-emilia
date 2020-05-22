<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EgresosRequest extends Request
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
            'id_familiar'       => 'required', 
            'detalles'          => 'required', 
        ];
    }

    public function messages()
    {
        return [
            'id_nna.required'               => 'Es obligatorio colocar el niño, niña o adolescente',
            'fecha.required'                => 'Es obligatorio colocar la fecha',
            'id_familiar.required'          => 'Es obligatorio colocar el familiar',
            'detalles.required'             => 'Es obligatorio colocar los detalles',
        ];
    }
}