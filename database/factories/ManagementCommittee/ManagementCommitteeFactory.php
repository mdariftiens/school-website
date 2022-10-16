<?php

namespace Database\Factories\ManagementCommittee;


use App\Models\ManagementCommittee\ManagementCommittee;
use Faker\Provider\bn_BD\Address;
use Faker\Provider\bn_BD\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManagementCommitteeFactory extends Factory
{
    protected $model = ManagementCommittee::class;

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
            'english_name' => $this->faker->sentence,
            'english_designation'=> $this->faker->sentence,
            'bangla_name'=> $person->name(),
            'bangla_designation'=> $address->address(),
            'contact_number'=> $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'image' => 'https://dummyimage.com/600x400/000/fff',
        ];
    }
}
