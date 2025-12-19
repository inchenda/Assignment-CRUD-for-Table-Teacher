<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    protected $model = \App\Models\Teacher::class;

    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'degree' => $this->faker->randomElement(['BSc','MSc','PhD']),
            'tel' => $this->faker->phoneNumber,
        ];
    }
}
