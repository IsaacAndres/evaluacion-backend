<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provincia::create(['nombre' => 'Provincia 1', 'region_id' => 1]);
        Provincia::create(['nombre' => 'Provincia 2', 'region_id' => 1]);
        Provincia::create(['nombre' => 'Provincia 3', 'region_id' => 2]);
        Provincia::create(['nombre' => 'Provincia 4', 'region_id' => 2]);
        Provincia::create(['nombre' => 'Provincia 5', 'region_id' => 3]);
    }
}
