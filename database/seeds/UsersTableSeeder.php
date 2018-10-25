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
        	'mobile_no' => '01234567890',
        	'first_line_address' => '1 House Avenue',
        	'second_line_address' => 'Housby',
        	'town' => 'Housetown',
        	'county' => 'Merseyside',
        	'postcode' => 'L11 1AB',
        	'password' => bcrypt('ko'),
	    ]);

	    factory(App\User::class, 5)->create();  
    }
}
