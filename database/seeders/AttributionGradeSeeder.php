<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\AttributionGrade;
use Illuminate\Database\Seeder;

class AttributionGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttributionGrade::factory(3)->create();
    }
}
