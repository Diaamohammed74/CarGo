<?php

namespace Database\Seeders;

use App\Models\MechanicalAvailableTime;
use Illuminate\Database\Seeder;

class MechanicalAvailableTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        MechanicalAvailableTime::factory(10)->create();
    }
}
