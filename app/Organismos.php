<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organismos extends Model
{
    protected $table = 'organismos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
    ];

    public function funcionarios()
    {
        return $this->hasMany('SAR\Funcionarios', 'id_organismo');
    }

}
