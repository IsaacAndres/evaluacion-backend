<?php

namespace Database\Seeders;

use App\Models\Calle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Calle::create(['nombre' => 'Calle 01', 'ciudad_id' => 1]);
        Calle::create(['nombre' => 'Calle 02', 'ciudad_id' => 2]);
        Calle::create(['nombre' => 'Calle 03', 'ciudad_id' => 3]);
        Calle::create(['nombre' => 'Calle 04', 'ciudad_id' => 4]);
        Calle::create(['nombre' => 'Calle 05', 'ciudad_id' => 5]);
        Calle::create(['nombre' => 'Calle 06', 'ciudad_id' => 6]);
    }
}
