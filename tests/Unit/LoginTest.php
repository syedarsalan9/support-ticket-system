<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DB;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    protected $admin;
    /**
     * forget password test run.
     *
     * @return void
     */
    public function testLogin()
    {
        //Create Admin
        $this->admin  = factory(\App\Models\User::class)->create([
            'name' => 'subAdmmin'
            'email' => 'sub@admin.com'
        ]);
        
        
        //Set As admin As Acting As
        $response = $this->actingAs($this->janitor)->get('/');
        $response->assertOk();

    }

}