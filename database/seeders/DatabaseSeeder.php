<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PersonSeeder::class,
            AgentSeeder::class,
            TypeMovementSeeder::class,
            CareerBreakSeeder::class,
            AffectationSeeder::class,
            AgentMobilitySeeder::class,
            FonctionSeeder::class,
            GradeSeeder::class,
            ServiceSeeder::class,
            TransferSeeder::class,
        ]);
    }
}
