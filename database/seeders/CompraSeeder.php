<?php

namespace Database\Seeders;

use App\Models\Compra;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Compra::factory(10)->create();
    }
}
