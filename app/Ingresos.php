<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingresos extends Model
{
    protected $table = 'ingresos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_nna',
        'fecha',
        'id_empleado',
        'id_funcionario',
        'motivo',
    ];

    public function nna()
    {
        return $this->belongsTo('App\NNA', 'id_nna');
    }

    public function empleado()
    {
        return $this->belongsTo('App\Empleados', 'id_empleado');
    }

    public function funcionario()
    {
        return $this->belongsTo('App\Funcionarios', 'id_funcionario');
    }
}
