<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObituarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creamos la tabla de obituario
		Schema::create('obituario',function($table){
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('panteon',100);
            $table->string('iglesia',100);
            $table->string('domicilioiglesia',100);
            $table->text('observaciones');
            $table->boolean('estatus');
            $table->integer('capilla');
            $table->datetime('salidadeservicio');
            $table->time('horaservicio');
            $table->date('fechafuneral');

            $table->rememberToken();
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('obituario');
	}

}
