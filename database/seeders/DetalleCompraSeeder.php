<?php

namespace Database\Seeders;

use App\Models\DetalleCompra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetalleCompra::factory(10)->create();
    }
}
