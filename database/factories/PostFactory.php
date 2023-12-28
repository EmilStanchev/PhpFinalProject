<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => Author::factory(),
            'title' =>$this->faker->sentence(),
            'slug' =>$this->faker->slug(3),
            'image' =>$this->faker->imageUrl(),
            'description' =>$this->faker->paragraph(10),
            'created_at' =>$this->faker->dateTimeBetween('-1 Week','now'),
            'featured' =>$this->faker->boolean(10),
        ];
    }
}
