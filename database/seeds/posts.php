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
	    for($i=0; $i < 100; $i++)
	    {
		    DB::table('posts')->insert([
			    'title'      => "Hello ". $i,
			    'description' => "Post " . $i,
			    'author' => 2
		    ]);
	    }
    }
}
