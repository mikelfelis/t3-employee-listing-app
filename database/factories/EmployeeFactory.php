<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'last_name' => fake()->lastName(),
            'first_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'position' => fake()->jobTitle(),
            'address' => fake()->address(),
            'age' => fake()->numberBetween(18, 80),
            'status' => fake()->word(),
        ];
    }
}
