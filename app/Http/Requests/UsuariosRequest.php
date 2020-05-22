<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuariosRequest extends Request
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
            'name'          => 'required',
            'email'         => 'required|email|unique:Usuarios,email,'.$this->id,     
            'password'      => 'required|min:6',
            'password2'     => 'required|min:6|same:password', 
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Es obligatorio colocar el nombre',
            'email.required'        => 'Es obligatorio colocar el email',
            'password.required'     => 'Es obligatorio colocar la contraseña',
            'password2.required'    => 'Es obligatorio confirmar la contraseña',

            'email.unique'          => 'Ya existe un usuario con ese email asignado',

            'password.min'          => 'La contraseña debe contener 6 caracteres como mínimo',
            'password2.same'        => 'Las contraseñas deben coincidir',
            
        ];
    }
}
