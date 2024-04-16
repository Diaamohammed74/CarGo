<?php

namespace Database\Seeders;

use App\Models\CustomerCar;
use Illuminate\Database\Seeder;

class CustomerCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CustomerCar::factory(10)->create();
    }
}
