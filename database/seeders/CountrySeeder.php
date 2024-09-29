<?php

namespace Database\Seeders;

use App\DataProviders\Jsons\JsonCountryDataProvider;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = new JsonCountryDataProvider(file_get_contents(database_path('data/countries.json')));
        $countries->import();
        
    }
}
