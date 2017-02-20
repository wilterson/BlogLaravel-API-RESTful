<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('users')->insert(array(
		    array('name'=>'Administrador','email'=>'admin@admin.com','password'=>bcrypt('admin123')),
		    array('name'=>'Wilterson Garcia','email'=>'wiltersongarcia@gmail.com','password'=>bcrypt('admin123'))
	    ));
    }
}
