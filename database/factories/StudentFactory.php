<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{

    protected $model = Student::class;


    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'roll' => $this->faker->numberBetween(1,500),
            'class' => $this->faker->numberBetween(1,9),
        ];
    }
}
