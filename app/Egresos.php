<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egresos extends Model
{
    protected $table = 'egresos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_nna',
        'fecha',
        'id_familiar',
        'detalles',
    ];

    public function nna()
    {
        return $this->belongsTo('App\NNA', 'id_nna');
    }

    public function familiar()
    {
        return $this->belongsTo('App\Familiares', 'id_familiar');
    }
}
