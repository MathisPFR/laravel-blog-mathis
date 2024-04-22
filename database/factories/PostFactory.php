<?php

namespace Database\Factories;

use App\Models\User;
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
            'title' => fake()->word(),
            'contenu' => fake()->sentence(),
            'description' => fake()->paragraph(6),
            'user_id' => User::all()->random()->id,
            'image' => fake()->randomelement(['avatars/7GhmYkG5NO9CbVBHw61Rz0tEUvt3ZR3ukxeHbLMt.jpg', 'avatars/aqqgvrsj5dsFWsyA3EqfvHMxY5Mla4rbwkblbToy.jpg', 'avatars/JcttnVZCMuZF8eto32XYK3LnTFLKlsDwvBKnvF2w.png'])

        ];
    }
}
