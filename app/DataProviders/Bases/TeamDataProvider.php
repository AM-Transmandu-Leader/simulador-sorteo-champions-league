<?php

namespace App\DataProviders\Bases;

class TeamDataProvider
{
    protected $teams;


    public function findByName(string $name): ?array
    {
        return $this->teams->where('name', $name)->first();
    }

    public function findByAbbrevation(string $abbrevation): ?array
    {
        return $this->teams->where('alpha2', $abbrevation)->first();
    }
}
