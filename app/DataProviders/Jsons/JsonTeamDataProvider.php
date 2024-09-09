<?php

namespace App\DataProviders\Jsons;

use App\DataProviders\Bases\TeamDataProvider;
use App\DataProviders\Concerns\TeamDataProviderConcern;
use App\Models\Pot;
use App\Models\Team;


class JsonTeamDataProvider extends TeamDataProvider implements TeamDataProviderConcern
{
    public function __construct()
    {
        $this->teams = $this->getData(file_get_contents(database_path('data/teams_clasified.json')));

    }

    public function getData($data): \Illuminate\Support\Collection
    {
        return collect(json_decode($data));
    }

    public function import()
    {
        foreach ($this->teams as $team) {
            Team::insert([
                'name' => $team->name,
                'abbrevation' => $team->abbrevation,
                'UEFA_coeff' => $team->uefa_coeff,
                'emblem' => $team->emblem,
                'country_id' => $team->country_id,
                'pot_id' => $team->pot_id ?? 5
            ]);
        }
    }
    
    public function potAssigment()
    {   
        $pots = Pot::orderBy('id', 'asc')->get();
        $teams = Team::orderBy('UEFA_coeff','desc')->get();
        $potSize = ceil($teams->count() / ($pots->count() - 1) );

        $teams->each(function ($team, $index) use ($pots, $potSize) {
            $potIndex = floor($index / $potSize);
            $pot = $pots->get($potIndex);
            $team->pot()->associate($pot);
            $team->save();            
        });
        
    }
}
