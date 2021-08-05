<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DB;

class TicketCreate extends TestCase
{
    use RefreshDatabase;

    protected $admin;
    /**
     * forget password test run.
     *
     * @return void
     */
    public function testCreate()
    {
        
        $response = factory(\App\Models\Ticket::class)->create([
            'name' => 'Test Ticket',
            'email' => 'test@email.com',
            'title' => 'Test ticket title',
            'content' => 'Test ticket content'
        ]);
        
   
        $response->assertOk();

    }

}