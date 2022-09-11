<?php

namespace Database\Seeders;

use App\Models\Media\Media;
use App\Models\Slider\Slider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        for ($i=1; $i<config('seeder.slider'); $i++){
            Slider::factory()->create([
                'priority' => $i
            ]);
        }

    }
}
