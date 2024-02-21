<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'acronym' => fake()->macAddress,
            'level' => Arr::random(['Direction', 'Division', 'Bureau', 'Cellule', 'Cabinet', 'Autre']),
            'type' => Arr::random(['Politique', 'Administratif', 'Appui', 'Autre'])
        ];
    }
}
