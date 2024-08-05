<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create(['nombre' => 'Región 1']);
        Region::create(['nombre' => 'Región 2']);
        Region::create(['nombre' => 'Región 3']);
    }
}
