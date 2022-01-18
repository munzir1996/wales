<?php

namespace Database\Seeders;

use App\Models\Well;
use Illuminate\Database\Seeder;

class WellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Well::factory(10)->create();
    }
}
