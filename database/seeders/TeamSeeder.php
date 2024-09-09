<?php

namespace Database\Seeders;

use App\DataProviders\Jsons\JsonTeamDataProvider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = new JsonTeamDataProvider();
        $teams->import();
        $teams->potAssigment();
    }
}
