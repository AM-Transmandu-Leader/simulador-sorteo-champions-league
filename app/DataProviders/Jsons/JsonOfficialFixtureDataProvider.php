<?php

namespace App\DataProviders\Jsons;

use App\DataProviders\Bases\OfficialFixtureDataProvider;
use App\DataProviders\Concerns\OfficialFixtureConcern;

class JsonOfficialFixtureDataProvider extends OfficialFixtureDataProvider implements OfficialFixtureConcern
{
    /**
     * Create a new class JsonOfficialFixtureDataProvider.
     */
    public function __construct($jsonFile)
    {
        $this->teams = $this->getData($jsonFile);

    }
}
