<?php

namespace App\DataProviders\Concerns;

use Illuminate\Support\Collection;

interface TeamDataProviderConcern
{
    public function getData(mixed $from): Collection;
}
