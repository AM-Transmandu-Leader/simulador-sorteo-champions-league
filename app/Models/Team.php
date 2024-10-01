<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'abbrevation',
        'UEFA_coeff',
        'country_id',
        'pot_id',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function pot(): BelongsTo
    {
        return $this->belongsTo(Pot::class);
    }

    public function fixtures(): BelongsToMany
    {
        return $this->belongsToMany(Fixture::class, 'fixture_team');
    }

    public function opponents(): HasManyThrough
    {
        return $this->hasManyThrough(Team::class, Fixture::class, 'home_team_id', 'id', 'id', 'away_team_id')
            ->orWhereHas('homeTeams', function ($query) {
                $query->where('away_team_id', $this->id);
            });
    }

    public function officialHomeMatches()
    {
        return $this->hasMany(OfficialFixture::class, 'home_team_id');
    }

    public function officialAwayMatches()
    {
        return $this->hasMany(OfficialFixture::class, 'away_team_id');
    }

}
