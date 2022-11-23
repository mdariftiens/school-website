<?php

namespace Database\Factories\Contactus;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name'=>$this->faker->name,
           'phone' => $this->faker->e164PhoneNumber,
           'email' => $this->faker->safeEmail,
           'subject' => $this->faker->paragraph(1),
           'message' => $this->faker->text,
        ];
    }
}
