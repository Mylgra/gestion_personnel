<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MobiliteAgent>
 */
class MobiliteAgentFactory extends Factory
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
            'motif'=> Arr::random(['Mise en disponibilité', 'Mise à la diposition','Detachement']),
            'document'=> fake()->name,
            'dateDebut'=> fake()->date,
            'dateRetour'=> fake()->date,
            'agent_id'=>Agent::factory()->create()
        ];
    }
}
