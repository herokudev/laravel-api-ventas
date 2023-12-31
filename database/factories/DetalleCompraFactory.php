<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleCompra>
 */
class DetalleCompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'compra_id' => 1,
            'articulo_id' => 1,
            'cantidad' => 5,
            'precio' => 23.55,
            'descuento' => 0                 
        ];
    }
}
