<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => null,
            'review' => $this->faker->paragraph(),
            'rating' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTimeBetween('-2 years'),
            'updated_at' => $this->faker->dateTimeBetween('created_at', 'now'),
        ];
    }

    /**
     * Indicate that the review is good.
     *
     * @return \Database\Factories\ReviewFactory
     */
    public function good()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => $this->faker->numberBetween(4, 5),
            ];
        });
    }

    /**
     * Indicate that the review is bad.
     *
     * @return \Database\Factories\ReviewFactory
     */
    public function bad()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => $this->faker->numberBetween(1, 3),
            ];
        });
    }

    /**
     * Indicate that the review is average.
     *
     * @return \Database\Factories\ReviewFactory
     */
    public function average()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => $this->faker->numberBetween(2, 4),
            ];
        });
    }
}
