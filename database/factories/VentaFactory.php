<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => 1,
            'worker_id' => 1,
            'fecha' => fake()->date(),
            'tipo_comprobante' => 'F',
            'serie' => 'A',
            'correlativo' => 1               
        ];
    }
}
