<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CessationCarriere>
 */
class CessationCarriereFactory extends Factory
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
            'motif'=> Arr::random(['Deces', 'Revocation','Mise à la retraite','Démission','Autre']),
            'document'=> fake()->name,
            'agent_id'=>Agent::factory()->create()
        ];
    }
}
