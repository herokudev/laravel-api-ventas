<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ArticuloSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(WorkerSeeder::class);
        $this->call(VentaSeeder::class);
        $this->call(DetalleVentaSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(CompraSeeder::class);
        $this->call(DetalleCompraSeeder::class);
    }
}
