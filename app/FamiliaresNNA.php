<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamiliaresNNA extends Model
{
    protected $table = 'familiares_x_nna';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_familiar', 
        'id_nna', 
        'parentesco',
    ];

    public function familiar()
    {
        return $this->belongsTo('App\Familiares', 'id_familiar');
    }

    public function nna()
    {
        return $this->belongsTo('App\NNA', 'id_nna');
    }
}
