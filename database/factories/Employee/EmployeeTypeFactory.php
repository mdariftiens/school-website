<?php

namespace Database\Factories\Employee;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeTypeFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'english_name'=>$this->faker->text,
            'bangla_name'=>$this->faker->text,
        ];
    }
}
