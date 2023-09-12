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
        $numerosPosibles = ['1','2','3','4','10'];
        return [
            'descripcion' => fake()->word(),
            'variedad' => fake()->colorName(),
            'family_id' => fake()->randomElement($numerosPosibles),
            'sembrado' => fake()->randomElement([0,1]),
            'epoca_siembra' => fake()->randomElement(['Principios de abril','Marzo','Mayo']),
            'tiempo_germ' => fake()->randomElement(['15 días','20 días','7 días']),
            'separacion' => fake()->randomElement(['30 cm','60 cm']),
            'riego' => fake()->randomElement(['Diario sin encharcar y frecuente. Más cuando empieza a dar los frutos.','Cada 2 días']),
            'temperatura_hsol' => fake()->randomElement(['8h de sol','6h de sol']),
            'abonos' => fake()->randomElement(['Al sembrar y cuando empiece a florecer','No requiere nutrientes específicos.']),
            'tratamiento' => fake()->randomElement(['Contra hongos','Se desconoce']),
            'asociaciones' => fake()->emoji(),
            'imagen' => fake()->imageUrl(360, 360, 'vegetables', true, 'vegetables')
        ];
    }
}
