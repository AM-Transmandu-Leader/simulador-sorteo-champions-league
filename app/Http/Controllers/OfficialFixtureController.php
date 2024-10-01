<?php

namespace App\Http\Controllers;

use App\DataResources\Datas\OfficialFixtureData;
use App\Models\Team;
use Illuminate\Http\Request;


class OfficialFixtureController extends Controller
{
    public function index()
    {
        $teams = Team::with('pot', 'officialHomeMatches.awayTeam', 'officialAwayMatches.homeTeam')->whereHas('pot')->get();
        $fixtureData =$teams->map(function ($team) {
            return OfficialFixtureData::create($team, $team->officialHomeMatches()->with('awayTeam')->get(), $team->officialAwayMatches()->with('homeTeam')->get());
        });
       
        return view('official_fixtures.index', compact('fixtureData'));
        

        
    }
}
