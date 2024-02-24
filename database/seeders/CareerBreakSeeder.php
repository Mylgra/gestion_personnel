<?php

namespace Database\Seeders;

use App\Models\CareerBreak;
use Illuminate\Database\Seeder;

class CareerBreakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CareerBreak::factory()->count(10)->create();
    }
}
