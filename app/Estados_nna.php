<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados_nna extends Model
{
    protected $table = 'estados_nna';

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
        return $this->hasMany('App\NNA', 'id_estado');
    }
}
