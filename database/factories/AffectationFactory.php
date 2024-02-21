<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Affectation;
use App\Models\Agent;
use App\Models\Fonction;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Affectation>
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
            'date' => fake()->date,
            'personal' => fake()->text,
            'document' => fake()->name,
            'agent_id' => Agent::factory()->create(),
            'service_id' => Service::factory()->create(),
            'fonction_id' => Fonction::factory()->create()
        ];
    }
}
