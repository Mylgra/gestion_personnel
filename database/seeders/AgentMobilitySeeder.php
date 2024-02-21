<?php

namespace Database\Seeders;

use App\Models\AgentMobility;
use Illuminate\Database\Seeder;

class AgentMobilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AgentMobility::factory()
            ->count(10)
            ->create();
    }
}
