<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'game_id' => Game::factory(),
            'role_id' => $this->faker->numberBetween(0, 3)


        ];
    }
}
