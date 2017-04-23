<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('escuela');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('remember_token');
            $table->integer('tipo_id')->unsigned()->default(2);
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->timestamps();            
            $table->string('api_token')->unique();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
