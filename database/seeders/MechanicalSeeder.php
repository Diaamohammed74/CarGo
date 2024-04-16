<?php

namespace Database\Seeders;

use App\Models\Mechanical;
use Illuminate\Database\Seeder;

class MechanicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Mechanical::factory(10)->create();
    }
}
