<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Friend;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	//$faker = Faker::create('pl_PL');

    	/* =============== VARIABLES =============== */

    	/*$number_of_users = 20;
    	$max_posts_per_user = 20;
    	$max_comments_per_post = 5;
    	$password = 'pass';*/

        // ROLES
    	DB::table('roles')->insert([
    		'id' => 1,
    		'type' => 'admin',
    	]);

    	DB::table('roles')->insert([
    		'id' => 2,
    		'type' => 'user',
    	]);

    	DB::table('roles')->insert([
    		'id' => 3,
    		'type' => 'owner',
    	]);

    	DB::table('roles')->insert([
    		'id' => 4,
    		'type' => 'editor',
    	]);


        //USERS
    	DB::table('users')->insert([
		    		'name' => 'admin1',
		    		'email' => 'admin1@wearegamers.co.pl',
		    		'sex' => 'm',
		    		'role_id' => 1,
		    		'password' => bcrypt('zaq123'),
		]);

		DB::table('users')->insert([
		    		'name' => 'szczesny1994',
		    		'email' => 'krzysztof.szczesny1994@gmail.com',
		    		'sex' => 'm',
		    		'role_id' => 1,
		    		'password' => bcrypt('zaq123'),
		]);

		DB::table('users')->insert([
		    		'name' => 'diro231',
		    		'email' => 'baczykdariusz@gmail.com',
		    		'sex' => 'm',
		    		'role_id' => 1,
		    		'password' => bcrypt('zaq123'),
		]);

    }
}

