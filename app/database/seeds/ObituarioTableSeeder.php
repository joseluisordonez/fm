<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class ObituarioTableSeeder extends Seeder {
    public function run(){
        DB::table('Obituario')->insert(array(
            'nombre'=>'Jose Luis Ordoñez Macias',
            'panteon'=>'Cuauhtemoc',
            'iglesia'=>'Catedral',
            'iglesia2'=>'Catedral2',
            'domicilioiglesia' =>'Hidalgo y 4ta.',
            'domicilioiglesia2' =>'Hidalgo y 2da',
            'observaciones'=>'Sin observaciones',
            'estatus'=>'0',
            'fallecimiento' => '20 de Noviembre de 2015',
            'cremacion' => 'Cremacion X',
            'horacremacion' => '5pm',
            'capilla'  => '1',
            'salidadeservicio' => '11:30am',
            'salidadeservicio2' => '11:30am',
            'horaservicio'=>'12:00pm',
            'horaservicio2'=>'12:00pm',
            'fechafuneral'=>'4 de Diciembre de 2015',
            'cementerio'=>'Cuauhtemoc'

        ));
        DB::table('Obituario')->insert(array(
            'nombre'=>'Pedor Perezz',
            'panteon'=>'Cuauhtemoc',
            'iglesia'=>'Catedral',
            'iglesia2'=>'Catedral2',
            'domicilioiglesia' =>'Hidalgo y 4ta.',
            'domicilioiglesia2' =>'Hidalgo y 2da',
            'observaciones'=>'Sin observaciones',
            'estatus'=>'1',
            'fallecimiento' => '20 de Noviembre de 2015',
            'cremacion' => 'Cremacion X',
            'horacremacion' => '5pm',
            'capilla'  => '2',
            'salidadeservicio' => '11:30am',
            'salidadeservicio2' => '11:30am',
            'horaservicio'=>'12:00pm',
            'horaservicio2'=>'12:00pm',
            'fechafuneral'=>'4 de Diciembre de 2015',
            'cementerio'=>'Cuauhtemoc'
        ));
        DB::table('Obituario')->insert(array(
            'nombre'=>'Tania Ordoñez',
            'panteon'=>'Cuauhtemoc',
            'iglesia'=>'Catedral',
            'iglesia2'=>'Catedral2',
            'domicilioiglesia' =>'Hidalgo y 4ta.',
            'domicilioiglesia2' =>'Hidalgo y 2da',
            'observaciones'=>'Sin observaciones',
            'estatus'=>'1',
            'fallecimiento' => '20 de Noviembre de 2015',
            'cremacion' => 'Cremacion X',
            'horacremacion' => '5pm',
            'capilla'  => '3',
            'salidadeservicio' => '11:30am',
            'salidadeservicio2' => '11:30am',
            'horaservicio'=>'12:00pm',
            'horaservicio2'=>'12:00pm',
            'fechafuneral'=>'4 de Diciembre de 2015',
            'cementerio'=>'Cuauhtemoc'
        ));
        DB::table('Obituario')->insert(array(
            'nombre'=>'Sandra Karina Ordoñez',
            'panteon'=>'Cuauhtemoc',
            'iglesia'=>'Catedral',
            'iglesia2'=>'Catedral2',
            'domicilioiglesia' =>'Hidalgo y 4ta.',
            'domicilioiglesia2' =>'Hidalgo y 2da',
            'observaciones'=>'Sin observaciones',
            'estatus'=>'1',
            'fallecimiento' => '20 de Noviembre de 2015',
            'cremacion' => 'Cremacion X',
            'horacremacion' => '5pm',
            'capilla'  => '4',
            'salidadeservicio' => '11:30am',
            'salidadeservicio2' => '11:30am',
            'horaservicio'=>'12:00pm',
            'horaservicio2'=>'12:00pm',
            'fechafuneral'=>'4 de Diciembre de 2015',
            'cementerio'=>'Cuauhtemoc'
        ));
        DB::table('Obituario')->insert(array(
            'nombre'=>'Josefina Macias',
            'panteon'=>'Cuauhtemoc',
            'iglesia'=>'Catedral',
            'iglesia2'=>'Catedral2',
            'domicilioiglesia' =>'Hidalgo y 4ta.',
            'domicilioiglesia2' =>'Hidalgo y 2da',
            'observaciones'=>'Sin observaciones',
            'estatus'=>'1',
            'fallecimiento' => '20 de Noviembre de 2015',
            'cremacion' => 'Cremacion X',
            'horacremacion' => '5pm',
            'capilla'  => '5',
            'salidadeservicio' => '11:30am',
            'salidadeservicio2' => '11:30am',
            'horaservicio'=>'12:00pm',
            'horaservicio2'=>'12:00pm',
            'fechafuneral'=>'4 de Diciembre de 2015',
            'cementerio'=>'Cuauhtemoc'
        ));
    }
}