<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FixtureMatch extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'home_team_score',
        'away_team_score',
        'stadium',
        'isFinished',
        'fixture_id'
    ];

    public function fixture(): BelongsTo
    {
        return $this->belongsTo(Fixture::class);
    }
}
