<?php

namespace Database\Seeders;

use App\Models\BasicInformation;
use Illuminate\Database\Seeder;

class BasicInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BasicInformation::factory(5)->create();
    }
}
