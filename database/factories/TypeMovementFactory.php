<?php

namespace Database\Factories;

use App\Contract\Enums\TypeMovementEnum;
use App\Models\TypeMovement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<TypeMovement>
 */
class TypeMovementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'designation' => fake()->word,
            'type' => Arr::random(TypeMovementEnum::cases())
        ];
    }
}
