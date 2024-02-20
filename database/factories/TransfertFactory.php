<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transfert>
 */
class TransfertFactory extends Factory
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
            'document'=> fake()->name,
            'agent_id'=>Agent::factory()->create(),
            'service_id'=>Service::factory()->create(),
            //'service_id'=>Service::factory()->create()
        ];
    }
}
