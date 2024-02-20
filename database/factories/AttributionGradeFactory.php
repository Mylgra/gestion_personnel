<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Grade;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AttributionGrade>
 */
class AttributionGradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'=> fake()->date,
            'motif'=> Arr::random(['Grade initial', 'Evolution en grade']),
            'document'=> fake()->name,
            'agent_id'=>Agent::factory()->create(),
            'grade_id'=>Grade::factory()->create()
        ];
    }
}
