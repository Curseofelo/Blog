<?php

namespace Database\Factories;

use App\Models\GameCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => $this->faker->word,
            'company' => $this->faker->word,
            'title' => $this->faker->word,
            'category_id' => GameCategory::get()->random()->id
        ];
    }
}
