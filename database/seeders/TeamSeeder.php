<?php

namespace Database\Seeders;

use App\DataProviders\Jsons\JsonTeamDataProvider;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = new JsonTeamDataProvider(database_path('data/teams_clasified.json'));
        $teams->import();
        $teams->potAssigment();
    }
}
