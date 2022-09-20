<?php

namespace Database\Seeders;

use App\Models\Achievements\Achievements;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Achievements::factory(config('seeder.achievement'))->create();

    }
}
