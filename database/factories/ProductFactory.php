<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

        /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_category_id' => $this->faker->randomElement(ProductCategory::pluck('id')->toArray()),
            'title'               => $this->faker->sentence,
            'slug'                => $this->faker->slug,
            'image'               => 'default.jpg',
            'description'         => $this->faker->paragraph,
            'price'               => $this->faker->randomFloat(2, 10, 100),
            'quantity'            => $this->faker->numberBetween(0, 100),
        ];
    }
}
