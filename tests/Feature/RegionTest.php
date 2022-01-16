<?php

namespace Tests\Feature;

use App\Models\Local;
use App\Models\Region;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_create_a_region()
    {
        $this->loginUser();
        $local = Local::factory()->create();

        $response = $this->post('/regions', [
            'name' => 'name',
            'local_id' => $local->id,
        ]);

        $this->assertDatabaseHas('regions', [
            'name' => 'name',
            'local_id' => $local->id,
        ]);
    }

    /** @test */
    public function user_can_edit_a_region()
    {
        $this->loginUser();
        $local = Local::factory()->create();
        $region = Region::factory()->create();

        $response = $this->put('/regions/'. $region->id, [
            'name' => 'name',
            'local_id' => $local->id,
        ]);

        $this->assertDatabaseHas('regions', [
            'name' => 'name',
            'local_id' => $local->id,
        ]);
    }

    /** @test */
    public function user_can_delete_a_region()
    {
        $this->loginUser();
        $local = Local::factory()->create();
        $region = Region::factory()->create();

        $response = $this->delete('/regions/'. $region->id);

        $this->assertSoftDeleted('regions', [
            'id' => $region->id,
        ]);
    }
}
