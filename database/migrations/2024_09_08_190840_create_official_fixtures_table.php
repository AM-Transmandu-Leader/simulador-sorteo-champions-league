<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('official_fixtures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_team_id');
            $table->foreign('home_team_id')->references('id')->on('teams');
            $table->foreignId('away_team_id');
            $table->foreign('away_team_id')->references('id')->on('teams');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('official_fixtures');
    }
};
