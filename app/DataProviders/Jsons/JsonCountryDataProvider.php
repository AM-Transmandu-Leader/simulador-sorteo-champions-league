<?php

namespace App\DataProviders\Jsons;

use App\DataProviders\Bases\CountryDataProvider;
use App\DataProviders\Concerns\CountryDataProviderConcern;
use App\Models\Country;

class JsonCountryDataProvider extends CountryDataProvider implements CountryDataProviderConcern
{
    public function __construct()
    {
        $this->countries = $this->getData(file_get_contents(database_path('data/countries.json')));

    }

    public function getData($data): \Illuminate\Support\Collection
    {
        return collect(json_decode($data));
    }

    public function import()
    {
        foreach ($this->countries as $country) {
            Country::insert([
                'name' => $country->name,
                'abbrevation' => strtoupper($country->alpha3),
                'flag_picture' => strtolower($country->alpha2) . '.png',
            ]);
        }
    }
}
