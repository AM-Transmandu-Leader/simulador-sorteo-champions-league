<?php

namespace App\DataResources\Datas;

use App\Models\Team;
use Illuminate\Support\Collection;

class OfficialFixtureData
{
    public static function create(Team $team, Collection $homeMatches, Collection $awayMatches)
    {
        $opponents = $homeMatches->concat($awayMatches)
            ->map(function ($match) use ($team) {
                return [
                    'opponentName' => $match->homeTeam->id === $team->id ? $match->awayTeam->name : $match->homeTeam->name,
                    'opponentEmblem' => $match->homeTeam->id === $team->id ? $match->awayTeam->emblem : $match->homeTeam->emblem,
                    'asHome' => $match->homeTeam->id === $team->id,
                ];
            });

        $matches = $homeMatches->concat($awayMatches)
            ->map(function ($match) {
                return $match->homeTeam->name . ' - ' . $match->awayTeam->name;
            });

        return [
            'teamId' => $team->id,
            'teamName' => $team->name,
            'pot' => $team->pot->position,
            'opponents' => $opponents,
            'matches' => $matches,
        ];
    }
}
