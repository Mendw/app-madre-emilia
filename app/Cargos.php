<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    protected $table = 'cargos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion',
    ];

    public function empleados()
    {
        return $this->hasMany('App\Empleados', 'id_cargo');
    }
}
