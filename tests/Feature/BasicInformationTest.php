<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicInformationTest extends TestCase
{
    /** @test */
    public function user_can_create_a_basic_information()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
