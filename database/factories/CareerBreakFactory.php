<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Contract\Enums\CareerCessationEnum;
use App\Models\Agent;
use App\Models\CareerBreak;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<CareerBreak>
 */
class CareerBreakFactory extends Factory
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
            'reason' => Arr::random(CareerCessationEnum::cases()),
            'document' => fake()->name,
            'agent_id' => Agent::factory()->create()
        ];
    }
}
