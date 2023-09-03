<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'sexo' => 'M',
            'fecha_nacimiento' => fake()->date(),
            'tipo_documento' => 'DPI',
            'num_documento' => '4545645644',
            'direccion' => fake()->address(),
            'telefono' => fake()->phoneNumber(),    
            'email' => fake()->email()    
        ];
    }
}
