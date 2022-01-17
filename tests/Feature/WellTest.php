<?php

namespace Tests\Feature;

use App\Models\BasicInformation;
use App\Models\Well;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WellTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_create_a_well()
    {
        $this->loginUser();
        $basicInformation = BasicInformation::factory()->create();

        $response = $this->post('/wells', [
            'longitude' => 125,
            'latitude' => 152,
            'well_depth' => 10,
            'packaging_depth' => 10,
            'swl' => 10,
            'dwl' => 10,
            'productivity' => 10,
            'psd' => 10,
            'basic_information_id' => $basicInformation->id,
        ]);

        $this->assertDatabaseHas('wells', [
            'longitude' => 125,
            'latitude' => 152,
            'well_depth' => 10,
            'packaging_depth' => 10,
            'swl' => 10,
            'dwl' => 10,
            'productivity' => 10,
            'psd' => 10,
            'basic_information_id' => $basicInformation->id,
        ]);
    }

    /** @test */
    public function user_can_edit_a_well()
    {
        $this->loginUser();
        $well = Well::factory()->create();
        $basicInformation = BasicInformation::factory()->create();

        $response = $this->put('/wells/'. $well->id, [
            'longitude' => 125,
            'latitude' => 152,
            'well_depth' => 10,
            'packaging_depth' => 10,
            'swl' => 10,
            'dwl' => 10,
            'productivity' => 10,
            'psd' => 10,
            'basic_information_id' => $basicInformation->id,
        ]);

        $this->assertDatabaseHas('wells', [
            'longitude' => 125,
            'latitude' => 152,
            'well_depth' => 10,
            'packaging_depth' => 10,
            'swl' => 10,
            'dwl' => 10,
            'productivity' => 10,
            'psd' => 10,
            'basic_information_id' => $basicInformation->id,
        ]);
    }

    /** @test */
    public function user_can_delete_a_well()
    {
        $this->loginUser();
        $well = Well::factory()->create();
        $basicInformation = BasicInformation::factory()->create();

        $response = $this->delete('/wells/'. $well->id);

        $this->assertSoftDeleted('wells', [
            'id' => $well->id,
        ]);
    }
}
