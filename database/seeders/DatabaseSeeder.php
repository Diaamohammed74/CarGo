<?php

namespace Database\Seeders;

      // use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use App\Models\City;
use App\Models\Product;
use App\Models\Service;
use App\Models\Governrate;
use App\Models\VideoCategory;
use App\Models\Specialization;
use App\Models\ProductCategory;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;
use Database\Factories\TagFactory;

class DatabaseSeeder extends Seeder
{
          /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class);
        $this->call(GovernrateSeeder::class);
        $this->call(CitySeeder::class);
        Specialization::factory(20)->create();
        ProductCategory::factory(20)->create();
        Product::factory(20)->create();
        ServiceCategory::factory(20)->create();
        Service::factory(20)->create();
        VideoCategory::factory(20)->create();
        Tag::factory(20)->create();
    }
}
