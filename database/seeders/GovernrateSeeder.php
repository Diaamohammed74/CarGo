<?php

namespace Database\Seeders;

use App\Models\Governrate;
use Illuminate\Database\Seeder;

class GovernrateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Governrate::factory(10)->create();
    }
}
