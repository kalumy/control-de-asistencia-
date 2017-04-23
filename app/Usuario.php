<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    
    //tabla a la que se asocia el modelo
    protected $table = 'usuarios';
    protected $fillable = [
        'nombre', 'escuela', 'email', 'password','tipo_id'
    ];
    protected $hidden = [
        'password', 'remember_token'];
    public function tipos()
    {
        return $this->belongsTo('App\Tipo');
    }
    public function admin()
    {
        return $this->tipo_id === 1;

    }
}
