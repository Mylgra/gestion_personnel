<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Fonction;
use Illuminate\Database\Seeder;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fonction::factory()->create();
    }
}
