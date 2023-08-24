<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Titulo'=>fake()->text(),
            'Autor'=>fake()->text(),
            'Editorial'=>fake()->word(),
            'Ano_de_publicacion'=>fake()->numerify('####'),
            'Cantidad_Disponible'=>fake()->numerify('###'),
        ];
    }
}
