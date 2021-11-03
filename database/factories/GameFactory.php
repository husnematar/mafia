<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
//            'room_id' => Room::factory(),
            'total_size' =>$this->faker->numberBetween(4, 20),
            'mafias' => $this->faker->numberBetween(1, 2),
            'doctors' =>  $this->faker->numberBetween(0, 1),
            'sheriffs' =>  $this->faker->numberBetween(0, 1),
            'civilians' =>  $this->faker->numberBetween(4, 8),
            'night_time' =>  5*60,
            'day_time' =>  12*60,
            'discussion_vote_time' =>  60,

        ];
    }
}
