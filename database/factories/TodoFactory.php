<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_client' => $this->faker->name(),
            'email_client' => $this->faker->email(),
            'tel_client' => '0',
            'message_client' => $this->faker->sentence(80),
            'user_id' => 11,
            // 'finished' => false
        ];
    }
}
