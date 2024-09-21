<?php

namespace Database\Seeders;

use App\DataProviders\Arrays\ArrayPotDataProvider;
use Illuminate\Database\Seeder;

class PotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pots = new ArrayPotDataProvider([
            ['position' => 1],
            ['position' => 2],
            ['position' => 3],
            ['position' => 4],
            ['position' => 99],
        ]);
        $pots->import();
    }
}
