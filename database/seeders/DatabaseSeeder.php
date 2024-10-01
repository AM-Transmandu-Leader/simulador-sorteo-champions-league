<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'fullname' => 'Evil Tester',
            'username' => 'ev.tester',
            'email' => 'ev.tester@example.com',
            'password' => Hash::make('testing'),
            'remember_token' => Str::random(15),
        ]);

        $this->call([
            CountrySeeder::class,
            PotSeeder::class,
            TeamSeeder::class
        ]);
    }
}
