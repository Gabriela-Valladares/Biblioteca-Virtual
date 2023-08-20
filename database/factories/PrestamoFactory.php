<?php

namespace Database\Factories;

use App\Models\Libro;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestamo>
 */
class PrestamoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_solicitud'=>fake()->dateTime(),
            'fecha_prestamo'=>fake()->dateTime(),
            'fecha_devolucion'=>fake()->date(),
            'libro_id'=>Libro::get('id')->random(),
            'usuario_id'=> Usuario::get('id')->random(),
        ];
    }
}
