<?php

namespace App\DataProviders\Jsons;

use App\DataProviders\Bases\CountryDataProvider;
use App\DataProviders\Concerns\CountryDataProviderConcern;
use App\Models\Country;

class JsonCountryDataProvider extends CountryDataProvider implements CountryDataProviderConcern
{
    public function __construct($fileJson)
    {
        $this->countries = $this->getData($fileJson);

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
                'flag_picture' => ($country->alpha3 === 'eng' || $country->alpha3 === 'sco')
                                        ? 'gb-' . strtolower($country->alpha3) . '.png'
                                        : strtolower($country->alpha2) . '.png',
            ]);
        }
    }
}
