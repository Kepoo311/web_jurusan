<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'thumbnail' => '1717743211_Copy of Untitled Design.png',
            'judul' => fake()->sentence(),
            'excerpt' => fake()->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(10,25)))
            ->map(fn($p) => "<p class='mb-3' >$p</p>")
            ->implode('')
        ];
    }
}
