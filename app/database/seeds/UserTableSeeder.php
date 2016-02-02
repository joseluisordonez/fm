<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'name'=> 'Administrador',
            'password' => Hash::make('model0') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}