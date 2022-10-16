<?php

namespace Database\Factories\Employee;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Faker\Provider\bn_BD\Address;
use Faker\Provider\bn_BD\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $person = new Person($this->faker);
        $address = new Address($this->faker);

        return [
            'english_name' => $this->faker->text,
            'bangla_name' => $person->name(),
            'employee_identification_number' => $this->faker->creditCardNumber,
            'designation_id' => random_int(1,config('seeder.employee_designation')),
            'department_id' =>  random_int(1,config('seeder.employee_department')),
            'english_description' => $this->faker->text,
            'bangla_description' => $address->address(),
            'employee_category_id' =>  random_int(1,config('seeder.employee_category')),
            'employee_type_id' =>  random_int(1,config('seeder.employee_type')),
            'contact_number' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->safeEmail,
            'date_of_joining' => $this->faker->date(),
            'date_of_birth' => $this->faker->date(),
            'blood_group' => $this->faker->text,
            'educational_qualification' => $this->faker->text,
            'major_subject' => $this->faker->text,
            'priority' => random_int(1,50),
            'image' => 'https://dummyimage.com/600x400/000/fff',
        ];
    }
}
