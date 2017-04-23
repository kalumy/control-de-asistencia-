<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //tabla a la que se asocia el modelo
    protected $table = 'tipos';
    protected $fillable = [
        'tipo'
    ];
    public function usuarios()
    {
    	return $this->hasMany('App/Usuario');
    }
}
