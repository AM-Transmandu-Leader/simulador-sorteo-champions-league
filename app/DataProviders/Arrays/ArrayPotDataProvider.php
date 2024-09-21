<?php

namespace App\DataProviders\Arrays;

use App\DataProviders\Bases\PotDataProvider;
use App\Models\Pot;

class ArrayPotDataProvider extends PotDataProvider
{
    public function __construct(array $pots)
    {
        $this->pots = $pots;

    }

    public function import()
    {
        foreach ($this->pots as $pot) {
            Pot::create([
                'position' => $pot['position'],
            ]);
        }
    }
}
