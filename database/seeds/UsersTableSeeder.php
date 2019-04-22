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
            [
        		'id' => 1,
                'name' => 'User 1',
            	'email' => 'user1@googlemail.com',
            	'password' => bcrypt('password'),
    	    ],

            [ 
                'id' => 2,
                'name' => 'User 2',
                'email' => 'user2@googlemail.com',
                'password' => bcrypt('password'),
            ], 

            [
                'id' => 3,
                'name' => 'User 3',
                'email' => 'user3@googlemail.com',
                'password' => bcrypt('password'),

            ], 

            [
                'id' => 4,
                'name' => 'User 4',
                'email' => 'user4@googlemail.com',
                'password' => bcrypt('password'),
            ],

            [
                'id' => 5,
                'name' => 'User 5',
                'email' => 'user5@googlemail.com',
                'password' => bcrypt('password'),
            ],

            [
                'id' => 6,
                'name' => 'User 6',
                'email' => 'user6@googlemail.com',
                'password' => bcrypt('password'),
            ],

            [
                'id' => 7,
                'name' => 'User 7',
                'email' => 'user7@googlemail.com',
                'password' => bcrypt('password'),
            ]
        ]);
    }
}
