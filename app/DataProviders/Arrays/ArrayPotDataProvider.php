<?php

namespace App\DataProviders\Arrays;

use App\DataProviders\Bases\PotDataProvider;
use App\Models\Pot;

class ArrayPotDataProvider extends PotDataProvider 
{
    public function __construct()
    {
        $this->pots = [
            ['position' => 1],
            ['position' => 2],
            ['position' => 3],
            ['position' => 4],
            ['position' => 99]
        ];

    }

    public function import()
    {
        foreach ($this->pots as $pot) {
            Pot::create([
                'position' => $pot['position']
            ]);
        }
    }
}
