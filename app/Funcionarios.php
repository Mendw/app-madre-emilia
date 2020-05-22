<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $table = 'funcionarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 'nombre', 'apellido', 'telefono', 'cargo', 'detalle_organismo', 'id_organismo',
    ];

    
    public function organismo()
    {
        return $this->belongsTo('App\Organismos', 'id_organismo');
    }

    
}
