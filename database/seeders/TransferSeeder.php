<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Service;
use App\Models\Transfer;
use Illuminate\Database\Seeder;

class TransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transfer::factory()
            ->for(Agent::factory()->create())
            ->for(Service::factory())
            ->count(10)->create();
    }
}
