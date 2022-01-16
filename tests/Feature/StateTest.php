<?php

namespace Tests\Feature;

use App\Models\State;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StateTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_create_a_state()
    {
        $this->loginUser();
        $response = $this->post('/states', [
            'name' => 'name',
        ]);

        $this->assertDatabaseHas('states', [
            'name' => 'name',
        ]);
    }

    /** @test */
    public function user_can_edit_a_state()
    {
        $this->loginUser();
        $state = State::factory()->create();

        $response = $this->put('/states/'. $state->id, [
            'name' => 'name',
        ]);

        $this->assertDatabaseHas('states', [
            'name' => 'name',
        ]);
    }

    /** @test */
    public function user_can_delete_a_state()
    {
        $this->loginUser();
        $state = State::factory()->create();

        $response = $this->delete('/states/'. $state->id);

        $this->assertSoftDeleted('states', [
            'id' => $state->id,
        ]);
    }
}
