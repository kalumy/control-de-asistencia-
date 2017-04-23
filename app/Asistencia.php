<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
	protected $table = 'asistencias';
    protected $fillable = [
        'dia','usuario_id','estado','reporte'
    ];
}
