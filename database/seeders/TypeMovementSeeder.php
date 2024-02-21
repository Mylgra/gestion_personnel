<?php

namespace Database\Seeders;

use App\Models\TypeMovement;
use Illuminate\Database\Seeder;

class TypeMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeMovement::factory(4)->create();
    }
}
