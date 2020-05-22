<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologias extends Model
{
    protected $table = 'patologias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion', 'gravedad',
    ];
}
