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
        Governrate::create([
            'governorate_name_ar' => 'القاهرة',
            'governorate_name_en' => 'Cairo',
        ]);
    }
}
