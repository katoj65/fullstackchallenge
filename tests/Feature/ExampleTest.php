<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\UsersWeatherFocustModel;
use Illuminate\Testing\TestResponse;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    // public function test_the_application_returns_a_successful_response()
    // {
    //     // $response = $this->get('/');

    //     // $response->assertStatus(200);
    // }

    public function test_database_works()
    {
        User::factory(20)->create();
        $this->assertEquals(20, User::all()->count());
    }


public function test_endpoint_making_request(){

$response=$this->get('/api',['firstname'=>'Joshua','lastname'=>'Kato','gender'=>'male','lat'=>'0.347596','long'=>'32.582520']);

$response->assertStatus(200)

->assertJson(['status'=>true]);

}




}
