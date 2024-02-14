<?php

namespace Database\Factories;
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
            'name'=> fake()->name,
            'username'=> fake()->userName,
            'firstname'=> fake()->firstName,
            'birthday'=> fake()->date,
            'birthplace'=> fake()->address,
            'contact'=> fake()->phoneNumber,
            'address'=> fake()->address,
            'picture'=> fake()->name,
            'gender'=> Arr::random(['Masculin','Feminin'])
        ];
    }
}
