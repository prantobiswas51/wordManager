<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Year;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Year::create([
            'year' => 'First Year',
        ]);
        Year::create([
            'year' => 'Second Year',
        ]);
        Year::create([
            'year' => 'Third Year',
        ]);
        Year::create([
            'year' => 'Fourth Year',
        ]);
    }
}
