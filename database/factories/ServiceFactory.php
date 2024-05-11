<?php

namespace Database\Factories;

use App\Models\ServiceCategory;
use App\Models\Specialization;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'service_category_id' => $this->faker->randomElement(ServiceCategory::pluck('id')->toArray()),
            'specialization_id'   => $this->faker->randomElement(Specialization::pluck('id')->toArray()),
            'title'               => $this->faker->sentence,
            'slug'                => $this->faker->slug,
            'image'               => 'default.jpg',                                                          // Replace with your image logic
            'price'               => $this->faker->randomFloat(2, 10, 100),
            'description'         => $this->faker->paragraph,
            'status'              => $this->faker->randomElement([0, 1]),
        ];
    }
}
