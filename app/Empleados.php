<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'empleados';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 'nombre', 'apellido', 'fecha_nacimiento', 'lugar_nacimiento', 'direccion', 'telefono', 'id_cargo',
    ];

    public function cargo()
    {
        return $this->belongsTo('App\Cargos', 'id_cargo');
    }
}
