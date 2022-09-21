<?php

namespace Database\Factories\ManagementCommittee;


use App\Models\ManagementCommittee\ManagementCommittee;
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
        return [
            'english_name' => $this->faker->text,
            'english_designation'=> $this->faker->text,
            'bangla_name'=> $this->faker->text,
            'bangla_designation'=> $this->faker->text,
            'contact_number'=> $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
