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
            $table->string('iglesia2',100);
            $table->string('diaservicio',100);
            $table->string('diaservicio2',100);
            $table->string('domicilioiglesia',100);
            $table->string('domicilioiglesia2',100);
            $table->text('observaciones');
            $table->boolean('estatus');
            $table->string('fallecimiento',100);
            $table->string('cremacion',100);
            $table->string('horacremacion',100);
            $table->integer('capilla');
            $table->string('salidadeservicio',40);
            $table->string('salidadeservicio2',40);
            $table->string('horaservicio',40);
            $table->string('horaservicio2',40);
            $table->string('fechafuneral',50);
            $table->string('cementerio',100);

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
