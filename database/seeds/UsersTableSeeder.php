<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
    		'id' => 1,
            'name' => 'Matt Benson',
        	'email' => 'mattbenson04@googlemail.com',
        	'password' => bcrypt('ko'),
	    ]);

	    factory(App\User::class, 5)->create();  
    }
}
