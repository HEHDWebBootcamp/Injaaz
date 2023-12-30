<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Board;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    protected $model = Board::class;

    public function definition()
    {
        $this->faker->locale();
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'user_id' => User::factory(),
        ];
    }
}
