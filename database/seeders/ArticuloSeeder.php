<?php

namespace Database\Seeders;

use App\Models\Articulo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Articulo::factory(10)->create();
    }
}
