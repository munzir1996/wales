<?php

namespace Tests\Feature;

use App\Models\ProjectManager;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectManagerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_create_a_project_manager()
    {
        $this->loginUser();

        $response = $this->post('/project-managers', [
            'name' => 'name',
        ]);

        $this->assertDatabaseHas('project_managers', [
            'name' => 'name',
        ]);
    }

    /** @test */
    public function user_can_edit_a_project_manager()
    {
        $this->loginUser();
        $projectManager = ProjectManager::factory()->create();

        $this->put('/project-managers/'. $projectManager->id, [
            'name' => 'name',
        ]);

        $this->assertDatabaseHas('project_managers', [
            'name' => 'name',
        ]);
    }

    /** @test */
    public function user_can_delete_a_project_manager()
    {
        $this->loginUser();
        $projectManager = ProjectManager::factory()->create();

        $this->delete('/project-managers/'. $projectManager->id);

        $this->assertSoftDeleted('project_managers', [
            'id' => $projectManager->id,
        ]);
    }
}
