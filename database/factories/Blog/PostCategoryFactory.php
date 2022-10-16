<?php

namespace Database\Factories\Blog;


use App\Models\Blog\PostCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCategoryFactory extends Factory
{
    protected $model = PostCategory::class;

    public function definition()
    {
        return [
            'post_id' => random_int(1,50),
            'category_id' => random_int(1,50),
        ];
    }
}
