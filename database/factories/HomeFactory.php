<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageName = $this->faker->image(storage_path('app/public/news_images'), 640, 480, null, false);

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'news_type' => $this->faker->randomElement(['main', 'normal']),
            'category' => $this->faker->randomElement(['announcement']),
            'image_path' => $imageName,
        ];
    }
}
