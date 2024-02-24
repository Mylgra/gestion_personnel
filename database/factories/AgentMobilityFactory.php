<?php

namespace Database\Factories;

use App\Contract\Enums\MobilityAgentEnum;
use App\Models\Agent;
use App\Models\AgentMobility;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<AgentMobility>
 */
class AgentMobilityFactory extends Factory
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
            'motif' => Arr::random(MobilityAgentEnum::cases()),
            'document' => fake()->name,
            'start_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'back_date' => fake()->dateTimeBetween('now', '+1 year'),
            'agent_id' => Agent::factory()->create()
        ];
    }
}
