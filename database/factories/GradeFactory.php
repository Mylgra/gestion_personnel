<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category'=> fake()->word,
            'code'=> fake()->postcode,
            'acronym'=> fake()->stateAbbr,
            'designation'=> fake()->text,
        ];
    }
}
