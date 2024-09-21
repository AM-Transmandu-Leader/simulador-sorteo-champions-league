<?php

namespace App\DataProviders\Bases;

class CountryDataProvider
{
    protected $countries;

    public function findByName(string $name): ?array
    {
        return $this->countries->where('name', $name)->first();
    }

    public function findByAlpha2(string $alpha2): ?array
    {
        return $this->countries->where('alpha2', $alpha2)->first();
    }

    public function findByAlpha3(string $alpha3): ?array
    {
        return $this->countries->where('alpha3', $alpha3)->first();
    }
}
