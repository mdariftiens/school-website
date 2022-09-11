<?php

namespace Database\Factories\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => config('seeder.event_category'),
            'bangla_title' => $this->faker->text,
            'english_title' => $this->faker->text,
            'bangla_description' => $this->faker->text,
            'english_description' => $this->faker->text,
            'is_published' => random_int(0,1),
            'bangla_venue' => $this->faker->text,
            'english_venue' => $this->faker->text,
            'from_datetime' => now(),
            'to_datetime' => now()->addDays(random_int(1,50)),
        ];
    }
}
