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
        fake();
        $name = $this->faker->sentence;
        return [
            'title' => $name,
            'slug' => str($name)->slug(),
            'content' => fake()->paragraphs(10, true),
            'description' => $this->faker->paragraphs(3, true),
            'category_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'posted' => $this->faker->randomElement(['yes','not']),
        ];
    }
}
