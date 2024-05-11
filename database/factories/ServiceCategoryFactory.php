<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceCategoryFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->unique()->word;
        return [
            'title' => $title,
        ];
    }
}
