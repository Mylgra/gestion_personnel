<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Service;
use App\Models\Transfer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transfer>
 */
class TransferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date,
            'document' => $this->faker->word,
            'agent_id' => Agent::factory(),
            'service_id' => Service::factory(),
        ];
    }
}
