<?php

namespace Database\Factories\Notice;

use App\Models\Notice\NoticeCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticeCategoryFactory extends Factory
{
    protected $model = NoticeCategory::class;

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
