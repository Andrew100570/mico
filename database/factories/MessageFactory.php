<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()    {

        return [
            'id' => fake()->randomNumber(5, false),
            'text' => fake()->text(20),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
