<?php

namespace Database\Factories;

use App\Models\Local;
use App\Models\ProjectManager;
use App\Models\Region;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class BasicInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start_date' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
            'execution_time' => $this->faker->numberBetween($min = 1, $max = 30),
            'owner' => $this->faker->name(),
            'advisor' => $this->faker->name(),
            'funded' => $this->faker->name(),
            'total_cost' => $this->faker->numberBetween($min = 1, $max = 3000),
            'state_id' => State::factory()->create()->id,
            'local_id' => Local::factory()->create()->id,
            'region_id' => Region::factory()->create()->id,
            'project_manager' => $this->faker->name(),
            'project_name'=>$this->faker->name(),
            
        ];
    }
}
