<?php

namespace Tests\Feature;

use App\Models\Local;
use App\Models\State;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LocalTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function client_can_create_a_local()
    {
        $this->loginUser();
        $state = State::factory()->create();

        $response = $this->post('/locals', [
            'name' => 'name',
            'state_id' => $state->id,
        ]);

        $this->assertDatabaseHas('locals', [
            'name' => 'name',
            'state_id' => $state->id,
        ]);
    }

    /** @test */
    public function client_can_edit_a_local()
    {
        $this->loginUser();
        $local = Local::factory()->create();
        $state = State::factory()->create();

        $response = $this->put('/locals/'. $local->id, [
            'name' => 'name',
            'state_id' => $state->id,
        ]);

        $this->assertDatabaseHas('locals', [
            'name' => 'name',
            'state_id' => $state->id,
        ]);
    }

    /** @test */
    public function client_can_delete_a_local()
    {
        $this->loginUser();
        $local = Local::factory()->create();

        $response = $this->delete('/locals/'. $local->id);

        $this->assertSoftDeleted('locals', [
            'id' => $local->id,
        ]);
    }
}


