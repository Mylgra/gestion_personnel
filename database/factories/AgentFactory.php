<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Agent>
 */
class AgentFactory extends Factory
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
            'type' => Arr::random(['Politique', 'Administratif', 'Autres']),
            'status' => Arr::random(['NU', 'Politique', 'Stagiaire', 'Autres', 'non reconnu']),
            'state' => Arr::random(['Actif', 'Inactif', 'Passif']),
            'document' => fake()->creditCardNumber,
            'person_id' => Person::factory()->create()
        ];
    }
}
