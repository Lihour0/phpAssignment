<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'title' => fake()->words(4, true),
            'bg_img' =>  fake()->randomElement(['https://static.frontendmasters.com/assets/courses/2023-08-13-node-js-v3/thumb.webp',
                'https://static.frontendmasters.com/assets/courses/2023-06-13-sveltekit/thumb.webp',
                'https://static.frontendmasters.com/assets/courses/2023-04-25-rust-ts-devs/thumb.webp',
                'https://static.frontendmasters.com/assets/courses/2023-01-09-reactivity-solidjs/thumb.webp',
                'https://static.frontendmasters.com/assets/courses/2023-01-09-reactivity-solidjs/thumb.webp',
                'https://static.frontendmasters.com/assets/courses/2021-05-11-rust/thumb.webp',
                'https://static.frontendmasters.com/assets/courses/2021-05-11-rust/thumb.webp']),
            'description' => fake()->paragraph(),
            'tag' => fake()-> randomElement([
                'Rust',
                'Javascript',
                'Typescript',
                'Algorithm',
                'Full Stack',
                'Node.js',
                'Build Tools']),
            'duration' => fake()->time(),
            'course_description' => fake()->paragraph(2),
            'author_id' => fake()->numberBetween(1, 20)
        ];
    }
}
