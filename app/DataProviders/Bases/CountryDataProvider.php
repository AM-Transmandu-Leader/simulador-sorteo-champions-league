<?php

namespace App\DataProviders\Bases;

class CountryDataProvider
{
    protected $countries;

    public function __construct() {}

    public function findByName(string $name): ?array
    {
        return $this->countries->where('name', $name)->first();
    }

    public function findByAlpha2(string $alpha2): ?array
    {
        return $this->countries->where('alpha2', $alpha2)->first();
    }
}
