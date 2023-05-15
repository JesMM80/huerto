<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hortaliza>
 */
class HortalizaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => fake()->name(),
            'variedad' => fake()->name(),
            'familia' => fake()->randomElement(['Crucíferas','Cucurbitáceas','Liliáceas']),
            'epoca_siembra' => fake()->date(),
            'tiempo_germ' => fake()->randomDigit(),
            'separacion' => fake()->randomDigit(),
            'riego' => fake()->name(),
            'temperatura_hsol' => fake()->randomDigit(),
            'abonos' => fake()->sentence(2),
            'tratamiento' => fake()->name(),
            'asociaciones' => fake()->sentence(2),
            'imagen' => fake()->sentence(2),
        ];
    }
}
