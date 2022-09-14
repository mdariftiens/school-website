<?php

namespace Database\Seeders;

use App\Models\Gallery\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        for ($i=1; $i<config('seeder.gallery'); $i++){
            Gallery::factory()->create([
                'priority' => $i
            ]);
        }

    }
}
