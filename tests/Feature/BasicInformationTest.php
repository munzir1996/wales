<?php

namespace Tests\Feature;

use App\Models\BasicInformation;
use App\Models\ProjectManager;
use App\Models\Region;
use App\Models\State;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicInformationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_create_a_basic_information()
    {
        $this->loginUser();
        $region = Region::factory()->create();
        $projectManager = ProjectManager::factory()->create();

        $response = $this->post('/basic-informations', [
            'start_date' => Carbon::now(),
            'execution_time' => 15,
            'owner' => 'owner',
            'advisor' => 'advisor',
            'funded' => 'funded',
            'total_cost' => 1500,
            'state_id' => $region->local->state->id,
            'local_id' => $region->local->id,
            'region_id' => $region->id,
            'project_manager_id' => $projectManager->id,
        ]);

        $this->assertDatabaseHas('basic_information', [
            'execution_time' => 15,
            'owner' => 'owner',
            'advisor' => 'advisor',
            'funded' => 'funded',
            'total_cost' => 1500,
            'state_id' => $region->local->state->id,
            'local_id' => $region->local->id,
            'region_id' => $region->id,
            'project_manager_id' => $projectManager->id,
        ]);
    }

    /** @test */
    public function user_can_edit_a_basic_information()
    {
        $this->loginUser();
        $basicInformation = BasicInformation::factory()->create();
        $region = Region::factory()->create();
        $projectManager = ProjectManager::factory()->create();

        $response = $this->put('/basic-informations/'. $basicInformation->id, [
            'start_date' => Carbon::now(),
            'execution_time' => 15,
            'owner' => 'owner',
            'advisor' => 'advisor',
            'funded' => 'funded',
            'total_cost' => 1500,
            'state_id' => $region->local->state->id,
            'local_id' => $region->local->id,
            'region_id' => $region->id,
            'project_manager_id' => $projectManager->id,
        ]);

        $this->assertDatabaseHas('basic_information', [
            'execution_time' => 15,
            'owner' => 'owner',
            'advisor' => 'advisor',
            'funded' => 'funded',
            'total_cost' => 1500,
            'state_id' => $region->local->state->id,
            'local_id' => $region->local->id,
            'region_id' => $region->id,
            'project_manager_id' => $projectManager->id,
        ]);
    }

    /** @test */
    public function user_can_delete_a_basic_information()
    {
        $this->loginUser();
        $basicInformation = BasicInformation::factory()->create();

        $response = $this->delete('/basic-informations/'. $basicInformation->id);

        $this->assertSoftDeleted('basic_information', [
            'id' => $basicInformation->id,
        ]);
    }
}
