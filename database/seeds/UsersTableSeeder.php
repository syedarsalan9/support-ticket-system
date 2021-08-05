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
        //
        if (!DB::table('users')->where('email', 'superadminuser@mailinator.com')->exists()) {

            DB::table('users')->insert([
            	[
                	'name' => 'Admin',
                	'email' => 'superadminuser@mailinator.com',
                	'password' => bcrypt('admin123'),
                	'created_at' => now()
            	]
        	]);
        }
    }
}
