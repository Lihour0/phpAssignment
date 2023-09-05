<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'title' => fake()->words(2, true),
            'description' => fake()->paragraph(3),
            'video_description' => fake()->paragraph(2),
            'video_title'=> fake()->words(2, true),
            'course_id' => fake()->numberBetween(1)
        ];
    }
}
