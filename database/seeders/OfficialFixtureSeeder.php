<?php

namespace Database\Seeders;

use App\DataProviders\Jsons\JsonOfficialFixtureDataProvider;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficialFixtureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $officialFixture = new JsonOfficialFixtureDataProvider(file_get_contents(database_path('data/uefa_champions_league_official_fixtures_match.json')));
        $officialFixture->import();
    
    }
}
