<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\UserWeatherFocustSeeder;

class DBTest extends TestCase
{
    /**
     * Test database seeding.
     */
    public function test_example(): void
    {
$this->seed();
$response=$this->seed(UserWeatherFocustSeeder::class);
$response->assertTrue(true);
    }


//test 






}
