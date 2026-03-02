<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    public function definition(): array
    {

        $user = User::inRandomOrder()->first() ?? User::factory()->create();
        return [
            "title" => fake()->sentence(3, true),
            "name" => $user->name,
            "image" => fake()->url(),
            "user_id" => $user->id,
            "type" => fake()->randomElement(["Work", "Reflection", "Thinking", "Creativity", "Personal Growth", "Adventure"]),
            "post_date" => fake()->dateTimeBetween("-12 months", "now"),
            "description" => fake()->sentence(15, true) 
        ];
    }
}
