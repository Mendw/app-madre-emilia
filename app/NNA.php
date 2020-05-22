<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NNA extends Model
{
    protected $table = 'nna';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'direccion',
        'telefono',
        'id_medida', 
        'numero_medida', 
        'expediente', 
        'fecha_medida', 
        'id_grado', 
        'id_escolaridad', 
        'unidad_educativa', 
        'direccion_unidad_educativa', 
        'tipo_sangre', 
        'id_estado', 
        'evaluacion_psicologica',
        'talla',
        'peso'
    ];

    public function medida()
    {
        return $this->belongsTo('App\Medidas_proteccion', 'id_medida');
    }

    public function grado()
    {
        return $this->belongsTo('App\Grados_instruccion', 'id_grado');
    }
    
    public function escolaridad()
    {
        return $this->belongsTo('App\Escolaridades', 'id_escolaridad');
    }
    
    public function estado()
    {
        return $this->belongsTo('App\Estados_nna', 'id_estado');
    }


}
