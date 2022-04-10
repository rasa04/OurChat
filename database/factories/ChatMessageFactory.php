<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChatMessage>
 */
class ChatMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'chatId' => $this->faker->numberBetween(1, 5),
            'message' => $this->faker->text('40'),
            'from_user' => $this->faker->numberBetween(1, 10),
        ];
    }
}
