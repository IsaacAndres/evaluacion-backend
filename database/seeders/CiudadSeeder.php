<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ciudad::create(['nombre' => 'Ciudad 1', 'provincia_id' => 1]);
        Ciudad::create(['nombre' => 'Ciudad 2', 'provincia_id' => 2]);
        Ciudad::create(['nombre' => 'Ciudad 3', 'provincia_id' => 3]);
        Ciudad::create(['nombre' => 'Ciudad 4', 'provincia_id' => 4]);
        Ciudad::create(['nombre' => 'Ciudad 5', 'provincia_id' => 5]);
        Ciudad::create(['nombre' => 'Ciudad 6', 'provincia_id' => 5]);
    }
}
