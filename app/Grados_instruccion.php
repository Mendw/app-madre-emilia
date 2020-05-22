<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grados_instruccion extends Model
{
    protected $table = 'grados_instruccion';

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
        return $this->hasMany('App\NNA', 'id_grado');
    }
}
