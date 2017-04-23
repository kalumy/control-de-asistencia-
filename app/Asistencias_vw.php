<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencias_vw extends Model
{
    protected $table = 'asistencias_vw';
    protected $fillable = [
        'dia','usuario_id','estado','entrada','salida','horas'
    ];
}
