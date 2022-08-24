<?php

namespace Database\Factories;

use App\Models\CarCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mark' => $this->faker->word,
            'model' => $this->faker->word,
            'pryce' => random_int(1, 200000),
            'category_id' => CarCategory::get()->random()->id
        ];
    }
}
