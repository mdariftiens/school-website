<?php

namespace Database\Seeders;

use App\Models\Achievements\Achievements;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\Blog\PostCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Category::factory(config('seeder.blog_category'))->create();
        Post::factory(config('seeder.blog_post'))->create();
        PostCategory::factory(config('seeder.blog_post_category'))->create();

    }
}
