<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoCategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
        ];
    }
}
