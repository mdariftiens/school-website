<?php

namespace Database\Factories\Notice;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => config('seeder.notice_category'),
            'bangla_title' => $this->faker->text,
            'english_title' => $this->faker->text,
            'bangla_description' => $this->faker->text,
            'english_description' => $this->faker->text,
            'is_published' => random_int(0,1),
            'published_date' => $this->faker->date(),
            'featured_image_link' => $this->faker->imageUrl(),
            'is_ticker' => random_int(0,1),
            'ticker_link' => $this->faker->url,
            'is_featured' => random_int(0,1),
        ];
    }
}
