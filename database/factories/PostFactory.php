<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{

    // @return array<string, mixed>

    

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'contenu' => fake()->paragraph(),
            'description' => fake()->paragraph(),

        ];
    }
}
