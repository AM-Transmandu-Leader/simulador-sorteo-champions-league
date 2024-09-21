<?php

namespace App\DataProviders\Bases;

class OfficialFixtureDataProvider
{
    protected $officialFixture;
    
    public function getTeamByPot(string $name): ?array
    {
        return $this->officialFixture->where('name', $name)->first();
    }
}
