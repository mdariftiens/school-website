<?php

namespace Database\Seeders;

use App\Models\News\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        News::factory(config('seeder.news'))->create();

    }
}
