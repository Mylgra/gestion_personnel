<?php

namespace Database\Factories;
use App\Models\Personne;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
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
            'date'=> fake()->date,
            'type'=> Arr::random( ['Politique', 'Administratif','Autres']),
            'status'=> Arr::random( ['NU', 'Politique','Stagiaire','Autres','non reconnu']),
            'state'=> Arr::random( ['Actif', 'Inactif','Passif']),
            'document'=> fake()->creditCardNumber,
            'personne_id'=>Personne::factory()->create()
        ];
    }
}
