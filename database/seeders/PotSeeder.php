<?php

namespace Database\Seeders;

use App\DataProviders\Arrays\ArrayPotDataProvider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pots = new ArrayPotDataProvider();
        $pots->import();
    }
}
