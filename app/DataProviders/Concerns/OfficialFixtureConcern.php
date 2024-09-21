<?php

namespace App\DataProviders\Concerns;

use Illuminate\Support\Collection;

interface OfficialFixtureConcern
{
    public function getData(mixed $from): Collection;
}
