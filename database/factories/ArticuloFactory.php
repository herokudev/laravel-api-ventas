<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => 'codigo_producto',
            'nombre' => 'nombre_producto',
            'descripcion' => 'descripcion_producto',
            'imagen' => 'imagen_producto'                  
        ];
    }
}
