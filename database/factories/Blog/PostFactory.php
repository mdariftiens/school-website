<?php

namespace Database\Factories\Blog;


use App\Models\Blog\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {

        $title = $this->faker->paragraph(1);
        $slug = Str::slug($title);
        return [
            'featured_image_link' => 'https://dummyimage.com/800x400/000/fff',
            'bangla_title' => $this->faker->text(),
            'english_title' => $title,
            'slug' => $slug,            
            'bangla_description' => $this->faker->text(),
            'english_description' => $this->faker->text(),
            'status' => $this->faker->randomElement(['draft','published']),
            'type' => $this->faker->randomElement(['post','page']),
            'visibility' => $this->faker->randomElement(['public','private']),
        ];
    }
}
