<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DB;

class TicketDelete extends TestCase
{
    use RefreshDatabase;

    protected $admin;
    /**
     * forget password test run.
     *
     * @return void
     */
    public function testDelete()
    {
        //Create Admin
        $this->admin  = factory(\App\Models\User::class)->create([
            'name' => 'subAdmmin'
            'email' => 'sub@admin.com'
        ]);
        
        $ticket = factory(\App\Models\Ticket::class)->create([
            'name' => 'Test Ticket',
            'email' => 'test@email.com',
            'title' => 'Test ticket title',
            'content' => 'Test ticket content'
        ]);
        
        //Set As admin As Acting As
        $response = $this->actingAs($this->admin)->call('DELETE', '/ticket/'.$tiket->id);
        $response->assertOk();

    }

}