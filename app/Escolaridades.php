<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escolaridades extends Model
{
    protected $table = 'escolaridades';

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
        return $this->hasMany('App\NNA', 'id_escolaridad');
    }
}
