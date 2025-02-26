<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Translation>
 */
class TranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'locale' => $this->faker->randomElement(['en', 'fr', 'es', 'de', 'it']),
            'key' => 'key_' . $this->faker->unique()->uuid, // Ensure uniqueness using UUID
            'content' => $this->faker->sentence,
            'tags' => [$this->faker->randomElement(['mobile', 'desktop', 'web'])],
        ];
    }
}
