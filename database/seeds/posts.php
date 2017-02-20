<?php

use Illuminate\Database\Seeder;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('posts')->insert([
            'title'      => "Hello World",
	        'description' => "Post de exemplo. Crie novos posts no meu ao lado",
			'author' => 2
	    ]);
    }
}
