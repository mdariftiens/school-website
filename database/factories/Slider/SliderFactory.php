<?php

namespace Database\Factories\Slider;


use App\Models\Slider\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bangla_title' => $this->faker->text,
            'english_title' => $this->faker->text,
            'english_description' => $this->faker->text,
            'bangla_description' =>  $this->faker->text,
            'is_published' => random_int(0,1),
            'priority' => random_int(1,100),
        ];
    }
}
