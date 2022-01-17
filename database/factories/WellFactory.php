<?php

namespace Database\Factories;

use App\Models\BasicInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class WellFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'longitude' => $this->faker->longitude,
            'latitude' => $this->faker->latitude,
            'well_depth' => $this->faker->numberBetween($min = 1, $max = 10),
            'packaging_depth' => $this->faker->numberBetween($min = 1, $max = 10),
            'swl' => $this->faker->numberBetween($min = 1, $max = 10),
            'dwl' => $this->faker->numberBetween($min = 1, $max = 10),
            'productivity' => $this->faker->numberBetween($min = 1, $max = 10),
            'psd' => $this->faker->numberBetween($min = 1, $max = 10),
            'basic_information_id' => BasicInformation::factory()->create()->id,
        ];
    }
}
