<?php

namespace App\DataProviders\Jsons;
use App\DataProviders\Bases\OfficialFixtureDataProvider;
use Illuminate\Support\Facades\DB;


class JsonOfficialFixtureDataProvider extends OfficialFixtureDataProvider
{
    public function __construct($fileJson)
    {
        $this->officialFixture = $this->getData($fileJson);

    }

    public function getData($data): \Illuminate\Support\Collection
    {
        return collect(json_decode($data));
    }

    public function import()
    {
        foreach ($this->officialFixture as $fixture) {
            foreach ($fixture->matches as $match) {
                DB::table('official_fixtures')->insert([
                    'home_team_id' => $match->home_team_id,
                    'away_team_id' => $match->away_team_id
                ]);
            }
            // Team::insert([
            //     'name' => $team->name,
            //     'abbrevation' => $team->abbrevation,
            //     'UEFA_coeff' => $team->uefa_coeff,
            //     'emblem' => $team->emblem,
            //     'country_id' => $team->country_id,
            //     'pot_id' => $team->pot_id ?? 5
            // ]);
        }
    }

}
