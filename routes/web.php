<?php

use App\DataProviders\Concerns\OfficialFixtureConcern;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\OfficialFixtureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use Database\Seeders\OfficialFixtureSeeder;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('web.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Routes for Countries
    Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');

    //Routes for teams
    Route::get('/teams_clasified', [TeamController::class, 'index'])->name('teams.index');
    Route::get('/official_fixture', [OfficialFixtureController::class, 'index'])->name('official_fixtures.index');
});

require __DIR__.'/auth.php';
