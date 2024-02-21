<?php

namespace Database\Factories;

use App\Contract\Enums\PersonCivilStatusEnum;
use App\Contract\Enums\PersonGenderEnum;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Person>
 */
class PersonFactory extends Factory
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
            'firstname' => fake()->firstName,
            'lastname' => fake()->lastName,
            'birthplace' => fake()->address,
            'contact' => fake()->phoneNumber,
            'address' => fake()->address,
            'picture' => fake()->imageUrl,
            'identity' => fake()->uuid,
            'birthday' => fake()->date('Y-m-d'),
            'civil_status' => Arr::random(PersonCivilStatusEnum::cases()),
            'gender' => Arr::random(PersonGenderEnum::cases())
        ];
    }
}
