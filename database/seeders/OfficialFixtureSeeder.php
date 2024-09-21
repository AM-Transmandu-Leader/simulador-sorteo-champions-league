<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficialFixtureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $teamsPot1 = Team::with('pot')->where('pot_id', 1)->get();
        $teamsPot2 = Team::with('pot')->where('pot_id', 2)->get();
        $teamsPot3 = Team::with('pot')->where('pot_id', 3)->get();
        $teamsPot4 = Team::with('pot')->where('pot_id', 4)->get();

        foreach ($teamsPot1 as $team) {
            switch ($team->name) {
                case 'Real Madrid':
                    $opponents = [
                        [
                            'asHome' => true,
                            'team' => $teamsPot1->where('name', 'Borussia Dortmund'),
                        ],
                        [
                            'asHome' => false,
                            'team' => $teamsPot1->where('name', 'Liverpool'),
                        ],
                        [
                            'asHome' => true,
                            'team' => $teamsPot2->where('name', 'AC Milan'),
                        ],
                        [
                            'asHome' => false,
                            'team' => $teamsPot2->where('name', 'Atalanta BC'),
                        ],
                        [
                            'asHome' => true,
                            'team' => $teamsPot3->where('name', 'RB Salzburg'),
                        ],
                        [
                            'asHome' => false,
                            'team' => $teamsPot3->where('name', 'LOSC Lille'),
                        ],
                        [
                            'asHome' => true,
                            'team' => $teamsPot4->where('name', 'Vfb Stuttgart'),
                        ],
                        [
                            'asHome' => false,
                            'team' => $teamsPot4->where('name', 'Stade Brestois'),
                        ],
                    ];

                    foreach ($opponents as $opponent) {
                        if ($opponent['asHome']) {
                            DB::table('official_fixtures')->insert([
                                'home_team_id' => $team->id,
                                'away_team_id' => $opponent['id'],
                            ]);
                        } else {
                            DB::table('official_fixtures')->insert([
                                'home_team_id' => $opponent['id'],
                                'away_team_id' => $team->id,
                            ]);
                        }
                    }
                    break;

                case 'Manchester City':
                    $opponents = [
                        [
                            'asHome' => true,
                            'team' => $teamsPot1->where('name', 'Inter de Milan'),
                        ],
                        [
                            'asHome' => false,
                            'team' => $teamsPot1->where('name', 'PSG'),
                        ],
                        [
                            'asHome' => true,
                            'team' => $teamsPot2->where('name', 'Club Brujas'),
                        ],
                        [
                            'asHome' => false,
                            'team' => $teamsPot2->where('name', 'Juventus'),
                        ],
                        [
                            'asHome' => true,
                            'team' => $teamsPot3->where('name', 'Feyernoord'),
                        ],
                        [
                            'asHome' => false,
                            'team' => $teamsPot3->where('name', 'Sporting CP'),
                        ],
                        [
                            'asHome' => true,
                            'team' => $teamsPot4->where('name', 'Sparta Praha'),
                        ],
                        [
                            'asHome' => false,
                            'team' => $teamsPot4->where('name', 'Slovan Brastilava'),
                        ],
                    ];

                    foreach ($opponents as $opponent) {
                        if ($opponent['asHome']) {
                            DB::table('official_fixtures')->insert([
                                'home_team_id' => $team->id,
                                'away_team_id' => $opponent['id'],
                            ]);
                        } else {
                            DB::table('official_fixtures')->insert([
                                'home_team_id' => $opponent['id'],
                                'away_team_id' => $team->id,
                            ]);
                        }
                    }
                    break;

            }

        }

    }
}
