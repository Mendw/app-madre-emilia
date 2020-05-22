<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidas_proteccion extends Model
{
    protected $table = 'medidas_proteccion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
    ];

    public function nna()
    {
        return $this->hasMany('App\NNA', 'id_medida');
    }
}
