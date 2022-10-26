<?php

namespace Database\Factories\Blog;


use App\Models\Blog\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'bangla_title' => $this->faker->text,
            'english_title' => $this->faker->text(),
            'status' => $this->faker->randomElement(['draft','published'])
        ];
    }
}
