<?php

namespace Database\Factories\Event;

use App\Models\Event\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventCategoryFactory extends Factory
{
    protected $model = EventCategory::class;

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
