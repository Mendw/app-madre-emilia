<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FamiliaresNNARequest extends Request
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
            'id_familiar'   => 'required',
            'id_nna'        => 'required',
            'parentesco'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'id_familiar.required'      => 'Es obligatorio colocar el familiar',
            'id_nna.required'           => 'Es obligatorio colocar el niño, niña o adolescente',
            'parentesco.required'       => 'Es obligatorio colocar el parentesco',
        ];
    }
}