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
        Schema::create('fixture_matches', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('home_team_score')->default(0);
            $table->integer('away_team_score')->default(0);
            $table->string('stadium');
            $table->boolean('isFinished')->default(false);
            $table->foreignId('fixture_id')->constrained('fixtures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixture_matches');
    }
};
