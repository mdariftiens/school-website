<?php

namespace Database\Factories\Achievements;

use Illuminate\Database\Eloquent\Factories\Factory;

class AchievementsFactory extends Factory
{
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
            'featured_image_link' => $this->faker->imageUrl(),
            'bangla_detail' => $this->faker->text,
            'english_detail' => $this->faker->text,
        ];
    }
}
