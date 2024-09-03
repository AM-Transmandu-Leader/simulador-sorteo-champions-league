<?php

namespace App\DataProviders\Concerns;

use Illuminate\Support\Collection;

interface CountryDataProviderConcern
{
    public function getData(mixed $from): Collection;
}
