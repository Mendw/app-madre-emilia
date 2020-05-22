<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatologiasNNA extends Model
{
    protected $table = 'patologias_x_nna';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_patologia', 'id_nna',
    ];

    public function patologia()
    {
        return $this->belongsTo('App\Patologias', 'id_patologia');
    }

    public function nna()
    {
        return $this->belongsTo('App\NNA', 'id_nna');
    }
}
