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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Service::factory(5)->create();
        \App\Models\Agent::factory(15)->create();
        \App\Models\Grade::factory(5)->create();
        \App\Models\Fonction::factory(5)->create();
        \App\Models\TypeMouvement::factory(5)->create();
        \App\Models\AttributionGrade::factory(5)->create();
        \App\Models\Personne::factory(2)->create();
        \App\Models\Affectation::factory(2)->create();
        \App\Models\Transfert::factory(2)->create();
        \App\Models\MobiliteAgent::factory(5)->create();
        \App\Models\CessationCarriere::factory(5)->create();
    }
}
