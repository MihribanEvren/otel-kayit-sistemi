<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Ad' => fake()->firstName(),
            'Soyad' => fake()->lastName(),
            'Giris_Tarihi' => fake()->date(),
            'Oda_No' => fake()->unique()->randomNumber(3),
            'Ek_Bilgiler' => fake()->text(50)
        ];
    }
}
