<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Becario extends Model
{
    protected $table = 'becarios';
    protected $fillable = [
            'apellido_paterno',
            'apellido_materno',
            'nombre',
            'area_del_conocimiento',
            'nivel',
            'institucion',
            'entidad_destino',
            'sexo',
    	];
}
