<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Service;
use App\Models\Fonction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Affectation>
 */
class AffectationFactory extends Factory
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
            'personalFonction'=> fake()->text,
            'document'=> fake()->name,
            'agent_id'=>Agent::factory()->create(),
            'service_id'=>Service::factory()->create(),
            'fonction_id'=>Fonction::factory()->create()
        ];
    }
}
