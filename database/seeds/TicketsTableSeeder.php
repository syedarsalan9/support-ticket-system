<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       	$count = \DB::table('tickets')->count();
		if($count == 0) {

        	$tickets = [
	            ['id' => 1, 'name' => 'Stephan de Vries', 'email' => 'stephan-v@gmail.com','title' => 'Title for stephan','content' => 'lorem ipsum is dummy text foramt','created_at' => now()],
            	['id' => 2, 'name' => 'John doe', 'email' => 'johndoe@gmail.com', 'title' => 'Title for John doe','content' => 'lorem ipsum is dummy text format','created_at' => now()],
        	];
            DB::table('tickets')->insert($tickets);
        }
    }
}
