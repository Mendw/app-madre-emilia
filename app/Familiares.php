<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familiares extends Model
{
    protected $table = 'familiares';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 
        'nombre', 
        'apellido', 
        'fecha_nacimiento', 
        'lugar_nacimiento', 
        'direccion',
        'telefono', 
    ];

}
